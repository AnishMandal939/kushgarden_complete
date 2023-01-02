<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageSent extends Mailable
{
	use Queueable, SerializesModels;
	public $contact;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($contact)
	{
		$this->contact = $contact;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		$img_url = env('APP_URL')."/images/1.jpeg";
		return $this->subject(config('app.name'))->markdown('emails.message.sent',['img_url'=>$img_url]);
	}
}
