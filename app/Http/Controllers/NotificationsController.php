<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use Illuminate\Http\Request;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notifications.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'description' =>'required',
            'products'     => 'required',
            'quantity'     =>  'required',
            'price_quantity'=> 'required',
            'total'         => 'required',

        ]);

        $correo = new TestMail($request->all());
        $email = $request->input('email');
        Mail::to($email)->send($correo);
     
        return redirect('/dashboardd/customers')->with('mensaje','Correo Enviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function show(Notifications $notifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function edit(Notifications $notifications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notifications $notifications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notifications $notifications)
    {
        //
    }
}
