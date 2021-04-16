<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => "Edgar Vinicius",
            'username' => "Edgar",
            'email' => "adgar.carvalho@hotmail.com",
            'password' => bcrypt("password"),
        ]);

        factory(User::class)->create([
            'name' => "Aline",
            'username' => "aline",
            'email' => "aline.tenorio96@gmail.com",
            'password' => "123456",
        ]);

        factory(User::class)->create([
            'name' => "Mariel",
            'username' => "mariel",
            'email' => "mariel@gmail.com",
        ]);

        factory(User::class)->create([
            'name' => "Igor",
            'username' => "igor",
        ]);

        factory(User::class)->create([
            'name' => "Anderson",
            'username' => "anderson",
        ]);

        factory(User::class)->create([
            'name' => "Eberson",
            'username' => "eberson.lmts",
            'email' => "eberson.santos1@gmail.com",
        ]);

        factory(User::class)->create([
            'name' => "Adelino",
            'username' => "adelino.lmts",
        ]);

        //factory(User::class, 45)->create();
    }
}
