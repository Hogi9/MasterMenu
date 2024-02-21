<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Menu;

class SubMenu extends Model
{
    protected $connection = 'mysql';
    protected $table = 'child_menu';

    protected $guarded =[];
    public $timestamps = false;

    public function submenu()
    {
        return $this->belongsTo(Menu::class,'parent_id','id');
    }
}
