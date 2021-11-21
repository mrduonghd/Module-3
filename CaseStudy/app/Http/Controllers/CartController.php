<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id){
        // session()->flush('cart');
        $book = Book::findOrFail($id);
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }else{
            $cart[$id] = [
                'name' => $book->title,
                'price' => $book->price,
                'quantity' => 1,
                'image' => $book->image,
            ];
        }
        session()->put('cart',$cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }

    public function showCart(){
        $carts = session()->get('cart');
        return view('carts.index', compact('carts'));
    }

    public function updateCart(Request $request){
        if($request->id && $request->quantity){
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cartComponent = view('carts.conponents.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent, 'code' => 200],200);
        }
    }

    public function deleteCart(Request $request){
        if($request->id){
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cartComponent = view('carts.conponents.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent, 'code' => 200],200);
        }
    }
}
