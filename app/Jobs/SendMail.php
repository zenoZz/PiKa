<?php

namespace App\Jobs;

use App\User;
use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $user;
    protected $data = [];

    /**
     * 创建一个新的任务实例。
     *
     * @param  User  $user
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * 运行任务。
     *
     * @param  Mailer  $mailer
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $data = $this->data;
        $mailer->send('email.activemail', $data, function($message) use($data)
        {
            $title = $data['nickname'].'对文章 '.$data['title'].'有新的评论';
            $message->to($data['email'])->subject($title);
        });
    }
}