<?php

namespace App\Mail;

use App\Article;
use App\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BlogUseNewsletterrMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $article;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Article $article )
    {
        $this->article = $article;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.NewsBlogsNews')->subject('Nouvelle article disponible.');
    }
}
