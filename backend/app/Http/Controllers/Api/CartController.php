<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getAllItems($id)
    {
        $items = Cart::where('user_id', $id)->get();
        return response()->json($items);
    }

    public function getAnItem($user, $food)
    {
        $item = Cart::where('user_id', $user)->where('food_id', $food)->first();
        return response()->json($item);
    }

    public function insertToCart(Request $request)
    {
        $data = $request->all();
        $cartItem = Cart::create($data);
        return response()->json($cartItem);
    }

    public function updateCartItemQty(Request $request)
    {
        $data = $request->all();
        $cartItem = Cart::where('user_id', $data['user_id'])
            ->where('food_id', $data['food_id'])
            ->update(['item_qty' => $data['item_qty']]);
        return response()->json($cartItem);
    }

    public function deleteItemInCart($user, $food)
    {
        $result = Cart::where('user_id', $user)->where('food_id', $food)->delete();
        return response()->json($result);
    }

    public function deleteAllItemsByUser($id)
    {
        $result = Cart::where('user_id', $id)->delete();
        return response()->json($result);
    }
}
