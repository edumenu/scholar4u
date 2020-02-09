<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function edit(User $user)
  {

    $this->authorize('update', $user->profile); //Authorize user to update thier profile

    return view('admin.profile', compact('user'));
  }

  public function update(User $user)
  {
    $this->authorize('update', $user->profile); //Authorize user to update thier profile

    $data = request()->validate([
      'image' => '',
      'address' => 'required',
      'current_school' => 'nullable',
      'gpa' => 'nullable',
      'major' => 'required',
      'phone_number' => 'required',
      'birthday' => 'required',
      'gender' => 'required',
      'citizenship' => 'required',
      'disabilities' => 'required',
      'military' => 'nullable',
      'ethnicity' => 'nullable',
      'sports' => 'nullable',
      'fraternity' => 'nullable',
    ]);

    if(!request('military')){

      $data['military'] = 'no';
      
    }

    if(request('image')){

      $imagePath = request('image')->store('uploads','public');
      $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);

      $image->save();

      $imageArray = ['image' => $imagePath];  //This overwirtes the image in the request data

    }

    //auth()->user()->profile->update($data);
    auth()->user()->profile->update(array_merge(
         $data,
         $imageArray ?? []    //This defaults to an empt array, just incase there's no image
     ));

    session()->flash('status','You have successfully updated your profile!');

    return redirect("profile/$user->id/edit");
  }
}
