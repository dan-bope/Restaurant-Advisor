<?php

namespace App\Http\Controllers;


use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RestaurantController extends Controller
{
    function getAll() {
        return Restaurant::all();
    }
    function getByID($id) {
        return response()->json(Restaurant::findOrFail($id), '200');
    }
    function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'grade' => 'required',
            'localization' => 'required',
            'phone_number' =>'required',
            'website' => 'required',
            'hours' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Required fields'
            ], 400);
        } else {
            $restaurant = new Restaurant();
            $restaurant->name = $request->name;
            $restaurant->description = $request->description;
            $restaurant->grade = $request->grade;
            $restaurant->localization = $request->localization;
            $restaurant->phone_number = $request->phone_number;
            $restaurant->website = $request->website;
            $restaurant->hours = $request->hours;

            $restaurant->save();

            return response()->json([
                'message' => "restaurant created"
            ], 201);
        }
    }

    function mis_a_jour(Request $request, $id) {
        $restaurant = Restaurant::where('id', $id)->first();

        if ($restaurant) {
            $restaurant = Restaurant::updateDTOtoObject($request, $restaurant);
            $restaurant->save();

            return response()->json([
                'message' => "updated."
            ], 200);
        } else {
            return response()->json([
                'message' => "Restaurant doesn't exist."
            ], 400);
        }
    }
    function supprime(Request $request, $id) {
        $restaurant = Restaurant::where('id', $id)->first();

        if ($restaurant) {
            $restaurant->delete();

            return response()->json([
                'message' => "deleted."
            ], 200);
        } else {
            return response()->json([
                'message' => "Restaurant doesn't exist."
            ], 400);
        }
    }
}
