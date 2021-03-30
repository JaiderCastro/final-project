<?php

namespace App\Http\Controllers;

use App\Models\Medicines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Cart;
//use Darryldecode\Cart\Facades\CartFacade;
//use PDF;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;


class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicines::all();
        return view('medicines.index')->with('medicines',$medicines);
    }

    public function facturacion()
    {
        //$medicine = Medicines::find($id);

        return view('medicines.facturacion'); 
    }

    public function cart(){

        return view('medicines.cart');
    }

    public function add_cart($id){
        
       $medicines = Medicines::find($id);
       $cart      = session()->get('cart');
       //si el carrito esta vacio
       if (!$cart) {
           $cart = [
               $id => [

                  "id"  => $medicines->id,
                   "name" => $medicines->name,
                   "quantity" => $medicines->quantity,
                   "price"  => $medicines->price,
               ]
             ];
             session()->put('cart', $cart);
             return redirect('dashboardd/medicines');
       }

       if(isset($cart[$id])) {
           $cart[$id]['quantity']++;

           session()->put('cart', $cart);
           return redirect('dashboardd/medicines');


       }
      //si el producto no existe en el carrito
       $cart[$id] = [

           "id"  => $medicines->id,
           "name" => $medicines->name,
           "quantity" => $medicines->quantity,
           "price" => $medicines->price
       ];

       session()->put('cart', $cart, $id);
       return redirect('dashboardd/medicines');
    }

    public function cart_trash($cart){
        session()->forget('cart');
        session()->put('cart',$cart);
        return redirect('/cart');
    }

    public function cart_remover(Request $request, $id){
       /* Cart::remove([
            'id' => $request->id,
            ]);   */ 
       $medicines = Medicines::find($request->id);
        Medicines::remove(['id' =>$request->id]);

        return redirect('/cart');
    }

     public function createPDF() {
        $medicines = Medicines::all();
        view()->share('medicines',);
        $pdf  = PDF::loadview('medicines.cart', compact('medicines',$medicines));
        return $pdf->download('pdf_file.pdf');
      }
 
    public function search(Request $request) {

        $term = $request->get('term');
        $querys = Medicines::where('name', 'LIKE', '%' . $term . '%')->get();

        $data = [];

        foreach ($querys as $query){
            $data[] = [
                'label' => $query->name
            ];

             return $data;
        }
             //return view('medicines.facturacion')->with( $querys);
    }

    public function email(){
        return view('medicines.email');
    }

    public function validaemail(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'products'     => 'required',
            'quantity'     =>  'required',
            'price_quantity'=> 'required',
            'total'         => 'required',

        ]);

        $correo = new TestMail($request->all());
        $email = $request->input('email');
        Mail::to($email)->send($correo);
     
        return redirect('/cart')->with('mensaje','Correo Enviado');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicines = new Medicines();
        $medicines->code = $request->get('code');
        $medicines->name = $request->get('name');
        $medicines->packing = $request->get('packing');
        $medicines->quantity = $request->get('quantity');
        $medicines->presentation = $request->get('presentation');
        $medicines->entry_date = $request->get('entry_date');
        $medicines->expiration_date = $request->get('expiration_date');
        $medicines->way_administration = $request->get('way_administration');
        $medicines->storage = $request->get('storage');
        $medicines->specifications = $request->get('specifications');
        $medicines->price = $request->get('price');
        $medicines->brand = $request->get('brand');
    
        $medicines->save();

        return redirect('dashboardd/medicines')->with('mensaje','¡Medicina Creada Con Exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function show(Medicines $medicines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicines $medicine, $id)
    {
        $medicines = Medicines::find($id);
        return view('medicines.edit')->with('medicines',$medicines);
    }

    public function edqu(Medicines $medicine, $id){
        $medicines = Medicines::find($id);
        return view('medicines.edd')->with('medicines',$medicines);
    }

    public function upqu(Request $request, Medicines $medicines, $id) {

        $request->validate([
            
            'quantity'         => ['required' ],
           
        ]);

        $medicines = DB::table('medicines')
        ->where('id', $request->id)
        ->update([
          
            'quantity'               => $request->quantity,
          
            
        ]);
        return redirect('/cart');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicines $medicines, $id)
    {
        $request->validate([
            'code'             => ['required', 'string', 'max:255'],
            'name'             => ['required', 'string',  'max:255',],
            'packing'          => ['required', 'string'],
            'quantity'         => ['required' ],
            'presentation'     => ['required'],
            'entry_date'          => ['required'],
            'expiration_date'   => ['required'],
            'way_administration'   => ['required'],
            'storage'             => ['required'],
            'specifications'      => ['required'],
            'price'               => ['required'],
            'brand'               => ['required'],
        ]);

        $medicines = DB::table('medicines')
        ->where('id', $request->id)
        ->update([
            'code'                   => $request->code,
            'name'                   => $request->name,
            'packing'                => $request->packing,
            'quantity'               => $request->quantity,
            'presentation'           => $request->presentation,
            'entry_date'             => $request->entry_date,
            'expiration_date'        => $request->expiration_date,
            'way_administration'     => $request->way_administration,
            'storage'                => $request->storage,
            'specifications'         => $request->specifications,
            'price'                  => $request->price,
            'brand'                  => $request->brand,

            
        ]);
        return redirect('dashboardd/medicines')->with('mensaje','¡Actualizacion Realizada Con Exito!');
        /* $medicine = Medicines::find($id);

        $medicine->code = $request->get('code');
        $medicine->transition_code = $request->get('transition_code');
        $medicine->name = $request->get('name');
        $medicine->packing = $request->get('packing');
        $medicine->quantity = $request->get('quantity');
        $medicine->presentation = $request->get('presentation');
        $medicine->expiration_date = $request->get('expiration_date');
        $medicine->way_administration = $request->get('way_administration');
        $medicine->storage = $request->get('storage');
        $medicine->entry_date = $request->get('entry_date');
        $medicine->specifications = $request->get('specifications');
        $medicine->price = $request->get('price');
        $medicine->brand = $request->get('brand');
    
        $medicines->save(); */

        //return redirect('dashboardd/medicines');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicines $medicines, $id)
    {
        $medicines = Medicines::find($id);
        $medicines->delete();

        return redirect('dashboardd/medicines')->with('mensaje','Medicina Eliminada Con Exito');
    }
}
