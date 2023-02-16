
@extends('headerAndFooter')
@section('content')
<div class="form-container w-50 mt-5">
    <div class="card-header"> Edit plate</div>
    <form action="/plates/{{$plate->id}}" method="POST" class="d-flex flex-column border-black create-plate-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="" class="form-label fw-bold">Title</label>
            <input type="text" class="form-control" name="name" value="{{$plate->name}}">
            @error('name')
                <p style="color:red;"> {{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label fw-bold">Description</label>
            <textarea class="form-control"  rows="3" name="description" >{{$plate->description}}</textarea>
            @error('description')
                <p style="color:red;"> {{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
           
            <label for="" class="form-label fw-bold">Image of the plate</label>
            <input class="form-control" type="file" name="image" value="{{old('image')}}">
            @error('image')
                <p style="color:red;"> {{$message}}</p>
            @enderror
        </div>

       
        <div class="submit-container">
            <input type="submit" name="submit" value="Edit Plate"> 
        </div>
    </form>
</div>
@endsection