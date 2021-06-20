<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(50)->create();
         $user=User::find(1);
         $user->name='dl';
         $user->email='dl@qq.com';
         $user->is_admin=true;
         $user->save();
    }
}
