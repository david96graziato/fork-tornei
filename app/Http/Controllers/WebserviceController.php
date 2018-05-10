<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\Webservice;
use App\User;
use Illuminate\Http\Request;

class WebserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Webservice  $webservice
     * @return \Illuminate\Http\Response
     */
    public function show(Webservice $webservice)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Webservice  $webservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Webservice $webservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Webservice  $webservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Webservice $webservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Webservice  $webservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Webservice $webservice)
    {
        //
    }
}
