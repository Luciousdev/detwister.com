<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\ContactformSend;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactformMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new job instance.
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Execute the job.
     * @return void
     */
    public function handle()
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactformSend($this->formData));
    }
}
