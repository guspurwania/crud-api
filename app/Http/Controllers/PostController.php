<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TablePost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => true,
            'code' => 200,
            'data' => TablePost::all()
        ]);
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
        $create = TablePost::create($request->all());

        if($create){
            return response()->json([
                'message' => 'Berhasil menginputkan data',
                'status' => true,
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Gagal menginputkan data',
                'status' => false,
                'code' => 400
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json([
            'status' => true,
            'code' => 200,
            'data' => TablePost::find($id)
        ]);
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
    public function update(Request $request, $id)
    {
        $update = TablePost::where('id', $id)->update($request->all());
        if($update){
            return response()->json([
                'message' => 'Berhasil mengupdate data',
                'status' => true,
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Gagal mengupdate data',
                'status' => false,
                'code' => 400
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = TablePost::destroy($id);
        if($destroy){
            return response()->json([
                'message' => 'Berhasil menghapus data',
                'status' => true,
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Gagal menghapus data',
                'status' => false,
                'code' => 400
            ]);
        }
    }
}
