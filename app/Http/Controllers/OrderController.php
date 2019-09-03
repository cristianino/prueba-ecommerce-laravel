<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $orders = Order::where('user_id', Auth::user()->id)->get();
      return view('ordenes.index', [
        'orders' => $orders
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $producto = Product::find($id);
      return view('ordenes.create', [
        'producto' => $producto
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
          $userId = Auth::user()->id;
          $productId = $request['productoId'];
          $order = new Order ();
          $order->customer_name = $request['name'];
          $order->customer_email = $request['email'];
          $order->customer_mobile = $request['mobile'];
          $order->customer_address = $request['address'];
          $order->status = 'CREATED';
          $order->user_id = $userId;
          $order->product_id = $productId;
          $order->save();
          $message = 'Orden creada exitosamente';
          $code = 200;
        } catch (\Exception $e) {
          $message = 'Algo ocurrio mal';
          $code = 500;
        }
        return response($message, $code);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
