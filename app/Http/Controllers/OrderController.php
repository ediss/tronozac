<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller {

    public function index(Request $request) {
        $name       = $request->input('name');
        $email      = $request->input('email');
        $phone      = $request->input('phone');
        $quantity   = $request->input('quantity');

        $request->validate( [
            'name'      =>  'required|',
            'email'     =>  'required|',
            'phone'     =>  'required|',
            'quantity'  =>  'required|',
        ]);

        $order = new Order;

        $order->name        = $name;
        $order->email       = $email;
        $order->number      = $phone;
        $order->quantity    = $quantity;

        $order->save();

    }
}
