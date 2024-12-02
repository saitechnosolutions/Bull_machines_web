<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {

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
        try {
            {

                $username = $request->input( 'username' );
                $password = $request->input( 'password' );

                $usercheck = DB::table( 'users' )
                ->where( 'mobilenum', $request->input( 'username' ) )
                ->first();

                if ( $usercheck ) {
                    if ( $usercheck->userstatus == 'Active' ) {
                        $credentials = [
                            'mobilenum' => $request[ 'username' ],
                            'password' => $request[ 'password' ],
                        ];

                        // dd( $credentials );
                        $test = Auth::attempt( $credentials );
                        // dd( $test );
                        if ( Auth::attempt( $credentials ) ) {
                            $user = User::where( 'mobilenum', $username )->first();
                            Auth::login( $user );
                            $userid = Auth::user()->userid;

                            //                 return redirect( '/dashboard' )->with( 'message', 'User Login Successfully...' );
                            //                 // return back()->with( 'success', 'Username Correct...' );
                            //             }
                            //             else
                            // {
                            //                 return back()->with( 'success', 'Username or Password Incorrect....' );
                            //             }
                            //     }
                            //     else
                            // {
                            //         return back()->with( 'success', 'User Not Activated...' );
                            //     }
                            // }
                            // else
                            // {
                            //     return back()->with( 'success', 'User Not Available...' );
                            // }

                            return response()->json( [ 'status'=>'success', 'User Login Successfully', 200 ] );
                        } else {
                            // return back()->with( 'error', 'Username or Password Incorrect....' );
                            return response()->json( [ 'status'=>'error', 'Invalid Credentials', 500 ] );
                        }
                    } else {
                        // return back()->with( 'success', 'User Not Activated...' );
                        return response()->json( [ 'status'=>'error', 'User Not Activated', 500 ] );
                    }
                } else {
                    // return back()->with( 'success', 'User Not Available...' );
                    return response()->json( [ 'status'=>'error', 'User Not Available', 500 ] );
                }
            }
        } catch ( \Throwable $th ) {
            //throw $th;
        }
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