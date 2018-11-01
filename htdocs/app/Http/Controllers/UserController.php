<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function profile()
    {
        $user = Auth::user();
        // return $user;
        return view('profile.index', array("user" => $user));
    }

    public function profileEdit()
    {
        $user = Auth::user();
        return view('profile.edit', array("user" => $user));
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            // 'username' => 'required|unique:users|max:255',
            // 'username' => Rule::unique('users')->ignore($user->id, 'id'),
            // 'email' => Rule::unique('users')->ignore($user->id, 'id'),
            'public' => 'nullable',
            'steam' => 'nullable',
            'twitch' => 'nullable',
            'youtube' => 'nullable',
        ]);

        $test = User::where('id', $user->id)->update($validatedData);
        return redirect()->route('profile');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
