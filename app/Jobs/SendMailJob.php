<?php

namespace App\Jobs;

use App\Mail\ContactConfirmMail;
use App\Mail\ContactMail;
use App\Mail\NewsletterConfirmMail;
use App\Mail\NewsletterMail;
use App\Mail\PackageRequestConfirmMail;
use App\Mail\PackageRequestMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    protected $form_type;

    /**
     * Create a new job instance.
     */
    public function __construct($data, $form_type,)
    {
        $this->data = $data;
        $this->form_type = $form_type;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        switch ($this->form_type) {
            case 'contact':
                
                Mail::to('intern.9@fossphorus.com')->send(new ContactMail($this->data));
                 
                Mail::to($this->data['email'])->send(new ContactConfirmMail($this->data));
                break;

            case 'newsletter':
                
                Mail::to('intern.9@fossphorus.com')->send(new NewsletterMail($this->data));


                Mail::to($this->data['subscription_email'])->send(new NewsletterConfirmMail($this->data));

                break;

           
            default:
                
                break;
        }
    }
}
