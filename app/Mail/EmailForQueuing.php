<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailForQueuing extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('sender@example.com', 'irunning')
            ->subject('Subject')
            ->view('mail'); //html視圖
            // ->text('emails.orders.shipped_plain') //純文字版本
            // ->with([ //可透過with()整理傳入參數
            //     'title' => $this->params['title'],
            //     'main' => $this->params['main'],
            // ]);
            // ->attach('/path/to/file', [ //夾帶檔案之檔案路徑
            //     'as' => 'name.pdf', //定義檔案顯示名稱
            //     'mime' => 'application/pdf',
            // ]);
    }
}