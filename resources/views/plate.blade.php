@extends('headerAndFooter')
@section('content')
    <div class="dashboard-banner w-100">
                Available Plates
    </div>
    <div class="w-100 d-flex gap-2 flex-wrap justify-content-center">
    @if(count($plates)==0)
     No available plates yet!!
    @endif
            
    @foreach($plates as $plate)
        <a href="/plates/{{$plate->id}}" class="card-link">
            <div class="card w-25 d-flex justify-content-between shadow-sm  mb-5 bg-body rounded "> 
                <div class="w-100 h-50 rounded-top">
                    <img src="{{asset('/storage/'.$plate->image)}}" alt="" class="rounded-top" style=" height : 100% ; width: 100%;border:0px solid black">
                </div>
                <span class="fw-bold">{{$plate->name}}</span>
                <p class="">{{\Illuminate\Support\Str::limit( $plate->description,  80,  '...')}}</p>
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
        </a>
    @endforeach

</div>
<div class="mt-2 w-75 pagination d-flex justify-content-center">{{$plates->links()}}</div>
<a href="/plates/create"><button class="btn btn-secondary">Add new plate</button></a>

@endsection
