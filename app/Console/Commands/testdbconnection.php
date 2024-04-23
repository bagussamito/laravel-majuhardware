<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class testdbconnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testdbconnection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing DB connection';

    /**
     * Execute the console command.
     */
     public function __construct() {
      parent::__construct();
   }

   public function handle() {
      try {
         DB::connection()->getPDO();
         dump('Database is connected. Database Name is : ' . DB::connection()->u950967108_dbmaju());
      } catch (Exception $e) {
         dump('Database connection failed');
      }
   }
}
