<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SubMenu;

class Menu extends Model
{
    protected $connection = 'mysql';
    protected $table = 'sidebar_menu';

    protected $guarded =[];
    public $timestamps = false;

    public function submenu()
    {
        return $this->hasMany(SubMenu::class,'parent_id','id');
    }
}
