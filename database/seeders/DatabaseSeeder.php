<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;
use App\Models\Menu;
use App\Models\SubMenu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'guest'
        ]);

        Role::create([
            'name' => 'superadmin'
        ]);

        User::create([
            'username' => 'admin',
            'email' => 'hogi.pt@gmail.com',
            'password' => bcrypt('admin123'),
            'role_id' => 2,
        ]);

        Menu::create([
            'title' => 'Testing',
            'url' => 'testing',
            'icon' => 'bx-food-menu',
            'have_child' => true,
        ]);

        Menu::create([
            'title' => 'No Child',
            'url' => 'testing2',
            'icon' => 'bx-cog',
            'have_child' => false,
        ]);

        SubMenu::create([
            'title' => 'Sub Menu',
            'url' => 'testing/testing',
            'parent_id' => 1,
        ]);

        SubMenu::create([
            'title' => 'Sub Menu2',
            'url' => 'testing/testing2',
            'parent_id' => 1,
        ]);
    }
}
