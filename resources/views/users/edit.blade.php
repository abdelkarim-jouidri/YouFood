@extends('headerAndFooter')
@section('content')
<div class="form-container w-50 mt-5">
    <div class="card-header"> Edit Profile</div>
    <form action="/profile/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="registerName" class="form-label">Name</label>
            <input type="text" class="form-control" id="registerName" name="name" value="{{$user->name}}">
            @error('name') 
                <p class="error-msg">{{$message}}</p>
            @enderror

        </div>
        <div class="mb-3">
            <label for="registerEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="registerEmail" name="email" aria-describedby="emailHelp" value="{{$user->email}}">
            @error('email') 
                <p class="error-msg">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="registerPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="registerPassword"  name="password" placeholder="Enter a new password">
            @error('password') 
                <p class="error-msg">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="registerPasswordConfirm" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="registerPasswordConfirm" name="password_confirmation" placeholder="Confirm your new password" >
            @error('password_confirmation') 
                <p class="error-msg">{{$message}}</p>
            @enderror
        </div>
        
        <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-primary w-100 text-black fw-bold bg-warning" name="submit">Save changes</button>
        </div>
    </form>
</div>
@endsection