@extends('layouts.admin_layout')

@section('content')
<div class="main-content">

  @if(session()->has('status'))
  
  <script>
     let promise = new Promise(function(resolve, reject){
        setTimeout(() => resolve('{{ session()->get('status') }}'), 1000);
     });

     promise.then(
        result => showNotification('top','right','{{ session()->get('status') }}'),
        error => alert("There was an error")
      );

 </script>

  @endif

  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-sm-10">
        <div class="card">
          <div class="jumbotronEditProfileUser">
              <h1 class="text-center">Edit Profile</h1>
          </div>
          <div class="content purpleText">
            <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
              @csrf
              @method('PATCH')  <!-- This converts the method to Patch method -->
              
              <div class="row">

                  <img src="{{ $user->profile->profileImage() }}" class="imageSize" alt="profile image" style="margin-left: 8px;">
                
              </div>
              <div class="row">
                <div class="col-md-4" style="margin-top: 15px;">
                      <input type="file" class="form-control-file" id="image" name="image"></br>  
                    @if ($errors->has('image'))
                        <strong class="text-danger">{{ $errors->first('image') }}</strong>
                    @endif
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                    <h3>Address</h3>
                    <input id="address" type="text" class="form-control" name="address" placeholder="Company" value="{{ old('address') ?? $user->profile->address }}"></br>
                    @if ($errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="text-danger">{{ $errors->first('address') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">

                <div class="col-md-4">
                  <div class="form-group">
                    <h3>Current School</h3>
                    <input id="current_school" type="text" name="current_school" class="form-control" placeholder="Current School" value="{{ old('current_school') ?? $user->profile->current_school }}">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <h3>GPA</h3>
                    <input id="gpa" type="number" name="gpa" class="form-control" placeholder="GPA" value="{{ old('gpa') ?? $user->profile->gpa }}">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group {{ $errors->has('major') ? 'has-error' : '' }}">
                    <h3>Major</h3>
                    <input id="major" type="text" name="major" class="form-control" placeholder="Major" value="{{ old('major') ?? $user->profile->major }}"></br>
                    @if ($errors->has('major'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="text-danger">{{ $errors->first('major') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                    <h3>Phone Number</h3>
                    <input id="phone_number" type="tel" name="phone_number" class="form-control" placeholder="Phone Number" value="{{ old('phone_number') ?? $user->profile->phone_number }}"></br>
                    @if ($errors->has('phone_number'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="text-danger">{{ $errors->first('phone_number') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
                    <h3>Birthday</h3>
                    <div class="form-group">
                      <input id="birthday" type="text" name="birthday" class="form-control datepicker" placeholder="Date Picker Here" value="{{ old('birthday') ?? $user->profile->birthday }}" /></br>
                      @if ($errors->has('birthday'))
                      <span class="invalid-feedback" role="alert">
                        <strong class="text-danger">{{ $errors->first('birthday') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                    <h3>Gender</h3>
                    <select id="gender" data-title="Select Gender" name="gender" class="selectpicker" data-style="btn-purple btn-fill btn-block" data-menu-style="dropdown-purple" value="Male">
                      @if($user->profile->gender == 'Male') <option value="Male" selected>Male</option> @else <option value="Male" >Male</option> @endif
                      @if($user->profile->gender == 'Female') <option value="Female" selected>Female</option> @else <option value="Female">Female</option> @endif
                      @if($user->profile->gender == 'Other') <option value="Other" selected>Other</option> @else <option value="Other">Other</option> @endif
                    </select></br></br>
                    @if ($errors->has('gender'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="text-danger">{{ $errors->first('gender') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('citizenship') ? 'has-error' : '' }}">
                    <h3>Citizenship</h3>
                    <input id="citizenship" type="text" name="citizenship" class="form-control" placeholder="Citizenship" value="{{ old('citizenship') ?? $user->profile->citizenship }}"></br>
                    @if ($errors->has('citizenship'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="text-danger">{{ $errors->first('citizenship') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('disabilities') ? 'has-error' : '' }}">
                    <h3>Disabilities</h3>
                    <input id="disabilities" type="text" name="disabilities" class="form-control" placeholder="Disabilities"  value="{{ old('disabilities') ?? $user->profile->disabilities }}"></br>
                    @if ($errors->has('disabilities'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="text-danger">{{ $errors->first('disabilities') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <h3>Military</h3>
                    @if ($user->profile->military == 'yes')
                    <input id="militarySwitch" type="checkbox" checked name="military" data-toggle="switch" data-on-color="danger" data-off-color="info" data-on-text="Yes" data-off-text="No" value="">
                    @else
                    <input id="militarySwitch" type="checkbox" name="military" data-toggle="switch" data-on-color="danger" data-off-color="info" data-on-text="Yes" data-off-text="No" value="">
                    @endif
                    <span class="toggle"></span>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <h3>Ethnicity</h3>
                    <input id="ethnicity" type="text" name="ethnicity" class="form-control" placeholder="Ethnicity" value="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <h3>Sports</h3>
                    <input id="sports" type="text" name="sports" class="form-control" placeholder="Sport activity">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <h3>Fraternity</h3>
                    <input id="fraternity" type="text" name="fraternity" class="form-control" placeholder="Ethnicity" value="">
                  </div>
                </div>
              </div>

              <button class="btn btn-success btn-fill pull-right">Update Profile</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
