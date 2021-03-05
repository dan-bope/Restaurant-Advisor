<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Restaurant extends Model
{
    use SoftDeletes;

    static function updateDTOtoObject($request, $restaurant) {

        if ($restaurant) {
            if ($request->name) {
                $restaurant->name = $request->name;
            }
            if ($request->description) {
                $restaurant->description = $request->description;
            }
            if ($request->grade) {
                $restaurant->grade = $request->grade;
            }
            if ($request->localization) {
                $restaurant->localization = $request->localization;
            }
            if ($request->phone_number) {
                $restaurant->phone_number = $request->phone_number;
            }
            if ($request->website) {
                $restaurant->website = $request->website;
            }
            if ($request->hours) {
                $restaurant->hours = $request->hours;
            }
            return ($restaurant);
        }
    }
}
