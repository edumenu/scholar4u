<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function edit(User $user)
  {

    //this->authorize('edit', $user); //Authorize user to view thier profile

    return view('admin.user', compact('user'));
  }

  public function update(User $user)
  {
    $this->authorize('update', $user); //Authorize user to update thier profile

    $data = request()->validate([
      'name' => 'required',
      'email' => ['required','email', Rule::unique('users')->ignore($user),'max:255'],
      'password' => 'nullable|string|min:8|confirmed',
    ]);


    if($data['password'] == null){

       $data['password'] = $user->password; 

    }else{

      $data['password'] = Hash::make($data['password']);

    }

    //dd($data);

    auth()->user()->update($data);

    session()->flash('status','You have successfully updated your user!');

    return redirect("/user/$user->id/edit");
  }
}
