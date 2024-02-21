<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;

class SidebarMenu extends Component
{
    public function render()
    {
        $menus = Menu::with('submenu')->get();
        return view('livewire.sidebar-menu', compact('menus'));
    }
}
