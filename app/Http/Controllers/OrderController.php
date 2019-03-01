<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Session;
use Mail;

class OrderController extends Controller {

    public function index(Request $request) {

        $request->validate( [
            'name'      =>  'required|',
            'email'     =>  'required|',
            'phone'     =>  'required|',
            'quantity'  =>  'required|',
        ]);

        $name       = $request->input('name');
        $address    = $request->input('address');
        $email      = $request->input('email');
        $phone      = $request->input('phone');
        $quantity   = $request->input('quantity');
        $model      = $request->input('ddl_model');
        $color      = $request->input('color');
        $note       = $request->input('note');
        $order = new Order;

        $order->name        = $name;
        $order->email       = $email;
        $order->number      = $phone;
        $order->quantity    = $quantity;

        //dd($color);
        if($order->save()){
            //return view('partials.test', ['name' => $name, 'email'=>$email, 'phone' => $phone, 'quantity'=>$quantity, 'model'=>$model, 'color'=>$color]);

            $data = [
                'name'      => $name,
                'address'   => $address,
                'email'     => $email,
                'phone'     => $phone,
                'quantity'  => $quantity,
                'model'     => $model,
                'color'     => $color,
                'notes'     => $note
            ];

            //Mail::send(['text'=>'partials.test'], $data, function($message) use ($data) {
            Mail::send('partials.mail', $data, function($message) use ($data) {
                $message->to('tronozact@gmail.com', 'Tronozac.rs')->subject ('Porudzbina');
                $message->from($data['email'], $data['name'] );
            });

            Session::flash('success', "$name,  uspešno ste poručili. Javićemo Vam se što pre kako biste potvrdili porudžbinu. Vaš Tronožac.rs");
            return redirect('/');
        }
        else{
            Session::flash('error', 'This is a message!');
            return view('partials.test');
        }



    }
}
