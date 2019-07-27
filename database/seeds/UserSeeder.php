
<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'rw']);
        Role::create(['name' => 'rt']);

        $superadmin = new User();
        $superadmin->name = 'admin';
        $superadmin->password = bcrypt('password');
        $superadmin->save();
        $superadmin->assignRole('rw');

        $superadmin1 = new User();
        $superadmin1->name = 'admin1';
        $superadmin1->password = bcrypt('password1');
        $superadmin1->rt = 1;
        $superadmin1->save();
        $superadmin1->assignRole('rt');

        $superadmin2 = new User();
        $superadmin2->name = 'admin2';
        $superadmin2->password = bcrypt('password2');
        $superadmin2->rt = 2;
        $superadmin2->save();
        $superadmin2->assignRole('rt');

        $superadmin3 = new User();
        $superadmin3->name = 'admin3';
        $superadmin3->password = bcrypt('password3');
        $superadmin3->rt = 3;
        $superadmin3->save();
        $superadmin3->assignRole('rt');

        $superadmin4 = new User();
        $superadmin4->name = 'admin4';
        $superadmin4->password = bcrypt('password4');
        $superadmin4->rt = 4;
        $superadmin4->save();
        $superadmin4->assignRole('rt');

        $superadmin5 = new User();
        $superadmin5->name = 'admin5';
        $superadmin5->password = bcrypt('password5');
        $superadmin5->rt = 5;
        $superadmin5->save();
        $superadmin5->assignRole('rt');         

        $superadmin6 = new User();
        $superadmin6->name = 'admin6';
        $superadmin6->password = bcrypt('password6');
        $superadmin6->rt = 6;
        $superadmin6->save();
        $superadmin6->assignRole('rt');
                              
    }
}
