<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\UpdateProfileRequest;
use User;
use Illuminate\Support\Facades\Hash;
use \Flash;

class ProfileController extends Controller
{
    
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = [
            'disabled' => 'disabled',
        ];

        return view('admin.profile.show', $data)
            ->with('profile', Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = [
            'disabled' => '',
        ];

        return view('admin.profile.edit', $data)
            ->with('profile', Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request)
    {
        $data = $request->validated();
        
        if ($data['password'])
            $data['password'] = Hash::make($data['password']);
        else
            unset($data['password']);
        
        Auth::user()->update($data);

        Flash::success('Profile updated successfully');
        
        return redirect()->route('profile.show');
    }

}
