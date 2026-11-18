<?php

use App\Http\Controllers\Api\ClaudeBlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Claude AI Blog API
|--------------------------------------------------------------------------
| Prefix: /api/claude
| Auth:   Authorization: Bearer {CLAUDE_API_TOKEN}
| Rules:  AI blogs are always saved as "draft" and can only be edited
|         while they are still drafts. Publishing is admin-only.
*/

Route::prefix('claude')
    ->middleware(['claude.token', 'throttle:30,1'])
    ->group(function () {
        Route::get('/blogs', [ClaudeBlogController::class, 'index']);
        Route::get('/blogs/{id}', [ClaudeBlogController::class, 'show'])->whereNumber('id');
        Route::post('/blogs', [ClaudeBlogController::class, 'store']);
        // POST alias for update so multipart/form-data image uploads work
        Route::match(['put', 'patch', 'post'], '/blogs/{id}', [ClaudeBlogController::class, 'update'])->whereNumber('id');
    });
