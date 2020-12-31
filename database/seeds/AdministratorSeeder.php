<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = "admin";
        $admin->email = "admin@gmail.com";
        $admin->password = \Hash::make("admin123");
        $admin->roles = "Admin";
        $admin->profil = "https://www.freeiconspng.com/thumbs/profile-icon-png/am-a-19-year-old-multimedia-artist-student-from-manila--21.png";
        $admin->save();
        $this->command->info("Admin berhasil ditambah");

    }
}
