<?php

namespace App\Console\Commands;
use App\Models\posicionesClass;
use App\Models\usuarios;

use Illuminate\Console\Command;

class QuizStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quiz:start {user} {email}';//Parametros

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $username = $this->argument('user'); //recupero el argumento user
        $email = $this->argument('email'); //recupero el argumento email
              
        $usuario =  new usuarios;
        $usuario -> nombre = $username;
        $usuario -> email = $email;
           
        $usuario -> save();
        
        return 0;
    }
}
