@extends('headerAndFooter')
@section('content')
<div class="card w-25 d-flex justify-content-between shadow-sm  mb-5 bg-body rounded "> 
            <div class="w-100 h-50 rounded-top">
                <img src="{{asset('/storage/'.$plate->image)}}" alt="" class="rounded-top" style=" height : 100% ; width: 100%;border:0px solid black">
            </div>
            <span class="fw-bold">{{$plate->name}}</span>
            <p class="">{{$plate->description}}</p>
            <div class="buttons d-flex justify-content-between align-items-center mt-3 p-2">
            <button class="btn btn-warning">
                <a href="/plates/{{$plate->id}}/edit" class=""><div class="">Edit</div></a>   
            </button>
            <form method="POST" action="/plates/{{$plate->id}}" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</button>
            </form>
            </div>
</div>
@endsection