<?php

namespace App\Http\Controllers;

use App\Models\TechnicianNotification;
use Illuminate\Http\Request;
use App\Models\TechnicianAccount;

class TechnicianNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TechnicianNotification::all();
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
        $tech_id = TechnicianAccount::where('email',  $request->email)->first()->id;

        return TechnicianNotification::create([
            'technician_account_id' =>   $tech_id ,
            'message' => $request->message,

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TechnicianNotification  $technicianNotification
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return TechnicianAccount::find($id)->notifications;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TechnicianNotification  $technicianNotification
     * @return \Illuminate\Http\Response
     */
    public function edit(TechnicianNotification $technicianNotification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TechnicianNotification  $technicianNotification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TechnicianNotification $technicianNotification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TechnicianNotification  $technicianNotification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TechnicianNotification::find($id)->delete();
    }
}
