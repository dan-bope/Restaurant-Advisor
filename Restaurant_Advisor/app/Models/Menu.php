<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    static function updateDTOtoMenu($request, $menu) {

        if ($menu) {
            if ($request->name) {
                $menu->name = $request->name;
            }
            if ($request->description) {
                $menu->description = $request->description;
            }
            if ($request->price) {
                $menu->price = $request->price;
            }
            if ($request->restaurant_id) {
                $menu->restaurant_id = $request->restaurant_id;
            }
            return ($menu);
        }
    }
}
