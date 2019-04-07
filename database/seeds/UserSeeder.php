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
        $superadmin = new User();
        $superadmin->name = 'ahmad';
        $superadmin->password = bcrypt('ganteng');
        $superadmin->save();
        $superadmin->assignRole('rt');
    }
}
