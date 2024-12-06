<?php

namespace App\Http\Controllers;

use App\DataTables\BranchDataTable;
use App\DataTables\DesignationDataTable;
use App\Models\Branch;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        try {
            return view( 'pages.masters.employee' );
        } catch ( \Throwable $th ) {
            return redirect()->back()->with( 'error', 'something went wrong' );
            Log::error( $th );
        }
    }

    // DESIGNATION

    public function designationIndex( DesignationDataTable $dataTable ) {
        try {
            return $dataTable->render( 'pages.masters.employee.designation' );
        } catch ( \Throwable $th ) {
            return redirect()->back()->with( 'error', 'something went wrong' );
            Log::error( $th );
        }
    }

    public function designationstore( Request $request ) {
        try {
            $designationName = $request->designationName;
            $designationID = $request->designationID;

            if ( !$designationID ) {
                Designation::create( [
                    'designation_name'=>$designationName,
                ] );

                return response()->json( [
                    'status' => 201,
                    'message' => 'Designation created successfully'
                ], 201 );
            } else {
                $designation = Designation::find( $designationID );

                $designation->update( [
                    'designation_name'=>$designationName,
                ] );

                return response()->json( [
                    'status' => 201,
                    'message' => 'Designation Updated successfully'
                ], 200 );
            }

        } catch ( \Throwable $th ) {
            return response()->json( [ 'error', 'error creating Designation', 400 ] );
            Log::error( $th );
        }
    }

    // BRANCH

    public function branchIndex( BranchDataTable $dataTable ) {
        try {
            return $dataTable->render( 'pages.masters.employee.branch' );
        } catch ( \Throwable $th ) {
            return redirect()->back()->with( 'error', 'something went wrong' );
            Log::error( $th );
        }
    }

    public function branchstore( Request $request ) {
        try {
            $branchName = $request->branchName;
            $branchID = $request->branchID;

            if ( !$branchID ) {
                Branch::create( [
                    'branch_name'=>$branchName,
                ] );

                return response()->json( [
                    'status' => 201,
                    'message' => 'Branch created successfully'
                ], 201 );
            } else {
                $branch = Branch::find( $branchID );

                $branch->update( [
                    'branch_name'=>$branchName,
                ] );

                return response()->json( [
                    'status' => 201,
                    'message' => 'Branch Updated successfully'
                ], 200 );
            }

        } catch ( \Throwable $th ) {
            return response()->json( [ 'error', 'error creating Branch', 400 ] );
            Log::error( $th );
        }
    }

    public function branchupdate( Request $request ) {
        try {
            $branchName = $request->branchName;
            $branchID = $request->branchID;

            $branch = Branch::find( $branchID );

            $branch->update( [
                'branch_name'=>$branchName,
            ] );

            return response()->json( [
                'status' => 200,
                'message' => 'Branch Updated successfully'
            ], 200 );

        } catch ( \Throwable $th ) {
            return response()->json( [ 'error', 'error creating Branch', 400 ] );
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