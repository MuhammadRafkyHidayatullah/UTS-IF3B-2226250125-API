<?php

namespace App\Http\Controllers;

use App\Models\assignments;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Validator;


class assignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assignments = assignments::all();
        $data['message'] = true;
        $data['result'] = $assignments;
        return response()->json($data,Response::HTTP_OK);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'NamaMahasiswa' => 'required',
            'NPM' => 'required',
            'MataKuliah' => 'required'
        ]);

        $result = assignments::create($validate);//simpan ke table prodis
        if($result){
            $data['success'] = true;
            $data['message'] = "Data assignments     Berhasil Disimpan";
            $data['result'] = $result;
            return response()->json($data,
            Response::HTTP_CREATED);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($assignments)
    {
        $assignments = assignments::find($assignments);
        $data['success'] = true;
        $data['message'] = "Detail data fakultas";
        $data['result'] = $assignments;
        return response()->json($data, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
