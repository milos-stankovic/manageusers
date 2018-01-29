<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = factory(App\User::class)->create([
            'email' => 'admin@manageusers.test',
            'is_admin' => 1
        ]);

       $users = factory(App\User::class, 50)->create();
    }
}
