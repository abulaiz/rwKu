
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

        $superadmin2 = new User();
        $superadmin2->name = 'ahmadRW';
        $superadmin2->password = bcrypt('ganteng');
        $superadmin2->save();
    }
}
