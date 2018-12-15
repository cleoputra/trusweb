<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateDefaultAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:default';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a default admin user.';

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
     * @return mixed
     */
    public function handle()
    {
        $email = $this->ask('Email:');
        $password = $this->secret('Password:');

        User::create([
            'name' => 'Administrator',
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->line('Default admin created with email: '.  $email);
    }
}
