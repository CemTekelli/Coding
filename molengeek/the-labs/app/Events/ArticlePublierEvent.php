<?php

namespace App\Events;

use App\Article;
use App\Newsletter;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ArticlePublierEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    // public $user;
    // public $newsletter;
    public $article;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($article)
    {
        // dd($article);
        $this->article = $article;
        // $this->newsletter = $newsletter;
        // $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
