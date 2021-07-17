<?php
namespace App\Libraries;

use App\Libraries\NotificationsInterface;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reservations;

class Notifications implements NotificationsInterface
{
	public function send()
	{
	//	dump('great book');
		Mail::to('asadaali065@gmail.com')->send(new Reservations('asad ali'));

	}
}