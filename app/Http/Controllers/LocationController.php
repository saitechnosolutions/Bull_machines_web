<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LocationController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        //
    }

    public function countryindex() {
        try {
            return view( 'pages.masters.country' );
        } catch ( \Throwable $th ) {
            return redirect()->back()->with( 'error', 'something went wrong' );
            Log::error( $th );
        }
    }

    public function countrystore( Request $request ) {
        try {
            $countryname = $request->countryName;
            Country::create( [
                'country_name'=>$countryname,
            ] );
            return response()->json( [ 'success', 'country created successfully', 201 ] );
        } catch ( \Throwable $th ) {
            return response()->json( [ 'error', 'error creating country', 400 ] );
            Log::error( $th );
        }
    }

    public function stateindex() {
        try {
            return view( 'pages.masters.state' );
        } catch ( \Throwable $th ) {
            return redirect()->back()->with( 'error', 'something went wrong' );
            Log::error( $th );
        }
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        //
    }
}