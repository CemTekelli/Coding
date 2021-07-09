<?php

namespace App\Listeners;

use App\Mail\BlogUseNewsletterrMail;
use App\Mail\BlogUserMail;
use App\Newsletter;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ArticlePublierListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        // foreach ($newsletters as $news) {
        //     $users = User::where('email', '!=', $news->email);
            
        
        // }
        // foreach ($users as $user) {
        //     $users = User::where('email', '!=', $news->email);
            
        // }
        
        $newsletters = Newsletter::all();
        $users = User::all();
        $i =1;

        foreach ($users as $user) {
            $when = now()->addSeconds($i * 5);

            Mail::to($user->email)->later($when, new BlogUserMail($event->article, $user));

            $i++;
        }

        foreach ($newsletters as $newsletter) {
            $when = now()->addSeconds($i * 5);

            Mail::to($newsletter->email)->later($when, new BlogUseNewsletterrMail($event->article));
            $i++;

        }
    }
}
