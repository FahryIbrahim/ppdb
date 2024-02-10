<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $totalData = User::count();
        $totalCowo = User::where('gender', 'L')->count();
        $totalCewe = User::where('gender', 'P')->count();
        return view('dashboard', [
            'users' => $users,
            'totalData' => $totalData,
            'totalCowo' => $totalCowo,
            'totalCewe' => $totalCewe,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'alamat' => 'required',
            'asalSekolah' => 'required',
            'noTelp' => 'required',
            'namaOrtu' => 'required',
            'gender' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('user.index')();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::findOrFail($id);
        return view('show', [$users => 'users']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id); // Assuming you're fetching a single user by ID

        return view('editing', ['user' => $user]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'alamat' => 'required',
            'asalSekolah' => 'required',
            'noTelp' => 'required',
            'namaOrtu' => 'required',
            'gender' => 'required',
        ]);
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('user.index');
    }
}
