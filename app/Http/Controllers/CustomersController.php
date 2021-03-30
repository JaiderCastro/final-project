<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctypes;
use App\Models\Frequents;
use App\Models\Medicines;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $customers = Customers::select('customers.*','frequents.name as nameFrequent')->join('frequents','customers.frequent_id', '=', 'frequents.id')->get();
              
        return view('customers.index',compact('customers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docs = Doctypes::all();
        $fres = Frequents::all();
        return view('customers.create', compact('docs', 'fres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*  
        $request->validate([
            'name'  => 'required',
            'lastname'  => 'required',
            'email'     => 'required',
            'phone'     =>   'required',
            'doctype_id'  => 'required',
            'frequent_id'  =>  'required',

        ]);
     
          Customers::create([
        'name'          => $request['name'],
        'lastname'      =>  $request['lastname'],
       'email'          => $request['email'],
        'phone'          =>  $request['phone'],
        ]);

          Doctypes::create([
              'doctype_id' => $request['doctype_id'],
          ]);
             Frequents::create([
                 'frequents_id'  => $request['frequents_id']
             ]);
        
       

        
         
        return redirect('dashboardd/customers'); */

       

        $customers                 =  new Customers();
        $customers->name           =  $request->name;
        $customers->lastname       =  $request->lastname;
        $customers->email          =  $request->email;
        $customers->phone          =  $request->phone;
        $customers->doctype_id          =  $request->doctype_id;
        $customers->frequent_id         =  $request->frequent_id;

        $customers->save();
         
         return redirect('dashboardd/customers')->with('mensaje', '¡Cliente Agregado Con Exito!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers, $id)
    {
        $doctypes   = Doctypes::all();
        $frequents  = Frequents::all();
        $customers    = Customers::find($id);
        return view('customers.edit', compact('doctypes', 'frequents','customers'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers, $id)
    {
        $request->validate([
            'name'          => 'required',
            'lastname'         => 'required',
            'email'   => 'required',
            'phone'    => 'required',
            'doctype_id'  => 'required',
            'frequent_id'  => 'required'
            
        ]);



        $customers = DB::table('customers')
                ->where('id', $request->id)
                ->update([
                    'name'                => $request->name,
                    'lastname'            => $request->lastname,
                    'email'               => $request->email,
                    'phone'               => $request->phone,
                    'doctype_id'          => $request->doctype_id,
                    'frequent_id'         => $request->frequent_id,
                    
                ]);

                return redirect('dashboardd/customers')->with('mensaje','Cliente Editado Con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers, $id)
    {
        $customers = Customers::find($id);
        $customers->delete();

        return redirect('dashboardd/customers')->with('mensaje', 'Cliente Eliminado');
    }
    
}
