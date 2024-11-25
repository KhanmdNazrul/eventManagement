<?php

namespace App\Http\Controllers\backend;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items =  Admin::orderBy('id', 'desc')->get();

        return view('backend.admin.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'image'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|string|lowercase|email|max:255|unique:' . Admin::class,
            'password'=> 'required|confirmed|min:8',
            
        ]);
        
        $sadmin =  new Admin;

        $sadmin->name = $request->name;
        $sadmin->phone= $request->phone;
        $sadmin->address=$request->address;
        $sadmin->image = $request->photo;
        $sadmin->email = $request->email;
        $sadmin->password = bcrypt( $request->password);
        $sadmin->save();

        return redirect()->route('general_admin.index')->with('msg', 'Admin Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
