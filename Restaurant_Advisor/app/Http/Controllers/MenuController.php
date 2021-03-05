<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    function getAll() {
        return Menu::all();
    }
    function getByID($id) {
        return Menu::findOrFail($id);
    }
    function menus_restaurant($id) {
        return Menu::where('restaurant_id', $id)->get();
    }
    function create_menu(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'restaurant_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Bad Request'
            ], 400);
        } else {
            $menu = new Menu();
            $menu->name = $request->name;
            $menu->description = $request->description;
            $menu->price = $request->price;
            $menu->restaurant_id = $request->restaurant_id;

            $menu->save();

            return response()->json([
                'message' => "menu created"
            ], 201);
        }
    }
    function menu_a_jour(Request $request, $id) {
        $menu = Menu::where('id', $id)->first();

        if ($menu) {
            $menu = Menu::updateDTOtoMenu($request, $menu);
            $menu->save();

            return response()->json([
                'message' => "Menu updated"
            ], 200);
        } else {
            return response()->json([
                'message' => "Menu doesn't exist."
            ], 400);
        }
    }
    function supprime_menu(Request $request, $id) {
        $menu = Menu::where('id', $id)->first();

        if ($menu) {
            $menu->delete();
            return response()->json([
                'message' => "Menu deleted"
            ],'200');
        } else {
            return response()->json([
                'message' => "Menu doesn't exist."
            ], 400);
        }
    }
}
