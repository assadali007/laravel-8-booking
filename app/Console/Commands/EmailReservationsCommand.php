<?php

namespace App\Console\Commands;
use App\Libraries\NotificationsInterface;
use App\Models\Booking;
use Illuminate\Console\Command;
use App\Notifications\Reservation;

//use Facades\App\Libraries\Notifications;
//use App\Libraries\Notifications;




class EmailReservationsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservations:booking 
    {count : the number of booking to retrieve}
    {--dry-run= : To have this command do no actual work}';                  //php artisan reservations:booking 3 --dry-run=Y

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify reservations holder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
     protected $notify;
    //public function __construct( //Notifications $notify)

    public function __construct(NotificationsInterface $notify)
    {
        $this->notify = $notify;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      /*  $name = $this->ask('What is your name?');
        dump($name);

        $password = $this->secret('What is the password?');
        dump($password);
        */

        $answer = $this->choice('what service should we use',
        ['sms','email']);
        dump($answer);
        if ($this->confirm('Do you wish to continue?')) {
            $count = $this->argument('count');
            if(!is_numeric($count))
            {
                $this->alert('the count must be number');
                 return 1;
            }
   
          $bookings = Booking::all();
          $this->info(sprintf('the number of bookings to alert is : %d',(count($bookings))));
          $bar = $this->output->createProgressBar(count($bookings));
          $bar->start();
          foreach($bookings as $booking)
          {
              $this->processBooking($booking);
             
              $bar->advance();
       
          }
          $bar->finish();
          $this->comment(' Command completed');
            
        }
       

    }
    public function processBooking($booking)
    {
        if($this->option('dry-run'))
              {
                  $this->info('would process booking');
              }
              else
              {
               $this->newLine();
               $booking->notify(new Reservation('Mart Marting'));
             //  $this->notify->send();
               # use with interface 
            //   $this->error('Nothing Happened');

            # use with facade
              // Notifications::send();
              }
    }
}
