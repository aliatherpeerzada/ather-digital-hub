<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// front end routes
        // Route::get('404', function(){
        //     return view('front_end.404');
        // });
        // Route::get('about', function(){
        //     return view('front_end.about');
        // });
        Route::get('/', function(){
            return view('front_end.index');
        });
        // Route::get('project', function(){
        //     return view('front_end.project');
        // });
        // Route::get('service', function(){
        //     return view('front_end.service');
        // });
        // Route::get('team', function(){
        //     return view('front_end.team');
        // });
        // Route::get('testimonial', function(){
        //     return view('front_end.testimonial');
        // });
        Route::get('blog', function(){
            return view('front_end.blog');
        });
        // Route::get('blog-detail', function(){
        //     return view('front_end.blog-detail');
        // });
        Route::get('{slug}', [BlogController::class, 'get_blog_details'])->name('blog.details');

        // Route::get('the-benefits-of-a-hotel-and-booking-management-system',function(){
        //     return view('blogs.benefits_of_hotel_and_booking_management');
        // });
        // Route::get('how-to-earn-extra-money-by-selling-billing-and-invoicing-solutions-as-a-service-by-ather-digital-hub',function(){
        //     return view('blogs.how_to_earn_extra_money_by_selling_billing_and_invoicing_solutions_as_a_service_by_ather_digital_hub');
        // });
        // Route::get('how-to-earn-money-as-a-laravel-developer-a-comprehensive-guide',function(){
        //     return view('blogs.how_to_earn_money_as_a_laravel_developer_a_comprehensive_guide');
        // });
        // Route::get('laravel-vs-wordpress-why-laravel-is-ideal-for-erp-systems-and-how-ather-digital-hub-sets-itself-apart',function(){
        //     return view('blogs.laravel_vs_wordpress_why_laravel_is_ideal_for_erp_systems_and_how_ather_digital_hub_sets_itself_apart');
        // });

        // Route::get('how-laravel-and-google-translate-api-can-simplify-multilingual-translation-for-your-website',function(){
        //     return view('blogs.leveraging_google_translate_api_with_laravel_for_seamless_multilingual_translation');
        // });
        // Route::get('best-custom-software-development-solutions-in-america-a-spotlight-on-ather-digital-hub',function(){
        //     return view('blogs.best_custom_software_development_solutions_in_america_a_spotlight_on_ather_digital_hub');
        // });
        // Route::get('what-is-an-inventory-management-system-and-why-does-your-business-need-it',function(){
        //     return view('blogs.what_is_an_inventory_management_system_and_why_does_your_business_need_it');
        // });
        // Route::get('streamline-your-business-with-xero-and-ather-digital-hubs-laravel-integration',function(){
        //     return view('blogs.streamline_your_business_with_xero_and_ather_digital_hubs_laravel_integration');
        // });
      
        // Route::get('laravel-vs-wordpress-the-better-option-in-2025',function(){
        //     return view('blogs.laravel_vs_wordpress_the_better_option_in_2025');
        // });

      
        // Route::get('generating-passive-income-through-saas-5-lucrative-opportunities',function(){
        //     return view('blogs.generating_passive_income_through_saas_5_lucrative_opportunities');
        // });
      
        // Route::get('revolutionize-your-business-how-a-modern-website-can-multiply-your-sales-100x',function(){
        //     return view('blogs.revolutionize_your_business_how_a_modern_website_can_multiply_your_sales_100x');
        // });
    
        // Route::get('chatgpt-vs-gemini-vs-copilot-integrating-ai-to-boost-productivity-in-your-application',function(){
        //     return view('blogs.chatgpt_vs_gemini_vs_copilot_integrating_ai_to_boost_productivity_in_your_application');
        // });
  
        // Route::get('transforming-education-the-role-of-e-learning-and-school-management-systems-in-todays-world',function(){
        //     return view('blogs.transforming_education_the_role_of_e_learning_and_school_management_systems_in_todays_world');
        // });
   
        // Route::get('boost-your-business-with-ather-digital-hubs-website-hosting-and-maintenance-services',function(){
        //     return view('blogs.boost_your_business_with_ather_digital_hubs_website_hosting_and_maintenance_services');
        // });
      
        // Route::get('importance-of-billing-and-invoicing-software-in-business',function(){
        //     return view('blogs.importance_of_billing_and_invoicing_software_in_business');
        // });
     
        // Route::get('laravel-development-in-2025',function(){
        //     return view('blogs.laravel_development_in_2025');
        // });



        Route::post('/contact/store',[FormController::class,'contact_store'])->name('contact.store');
        Route::post('/newsletter/store',[FormController::class,'news_letter_store'])->name('newsletter.store');
            Route::group(['middleware' => 'auth'],function (){
                Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
                Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
                Route::delete('/admin/newsletter/delete/{id}',[FormController::class,'newsletter_delete'])->name('newsletter.delete');
                Route::delete('/admin/contact/delete/{id}',[FormController::class,'contact_delete'])->name('contact.delete');


                 // blog routes
    Route::get('/admin-blogs', [BlogController::class, 'admin_blogs'])->name('blogs');
    Route::get('/admin-blogs-create', [BlogController::class, 'admin_blogs_create'])->name('blogs.create');
    Route::post('/admin-blogs-create/store', [BlogController::class, 'admin_blogs_store'])->name('blogs.store');
    Route::get('/admin-blogs-edit/{id}', [BlogController::class, 'admin_blogs_edit'])->name('blogs.edit');
    Route::put('/admin-blogs-edit/{id}/update', [BlogController::class, 'admin_blogs_update'])->name('blogs.update');
    Route::delete('/admin-blogs-delete/{id}', [BlogController::class, 'admin_blogs_delete'])->name('blogs.delete');
    // end blog routes


            });
            Route::get('/clear-cache', function () {
                Artisan::call('route:clear');
                Artisan::call('config:clear');
                Artisan::call('cache:clear');
                Artisan::call('view:clear');
                Artisan::call('config:cache');
            
                // Check if storage link exists before linking
                $storageLink = public_path('storage');
                if (!is_link($storageLink)) {
                    Artisan::call('storage:link');
                }
            
                return response()->json(['status' => 'success', 'message' => 'All caches cleared successfully']);
            });