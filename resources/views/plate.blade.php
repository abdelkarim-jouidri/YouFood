@extends('headerAndFooter')
@section('content')
    <div class="dashboard-banner w-100">
                Available Plates
    </div>
    <div class="w-100 d-flex gap-2 flex-wrap justify-content-center  align-items-stretch">
    @if(count($plates)==0)
     No available plates yet!!
    @endif
            
    @foreach($plates as $plate)
    <a href="/plates/{{$plate->id}}">
        <div class="card d-flex justify-content-between shadow-md h-100" style="width: 18rem;">
            <img src="{{asset('/storage/'.$plate->image)}}" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-between flex-column">
                <span class="fw-bold">{{$plate->name}}</span>
                        <p class="">{{\Illuminate\Support\Str::limit( $plate->description,  80,  '...')}}</p>
                        @auth
                        <div class="buttons d-flex justify-content-between align-items-center mt-3 p-2">
                            <button class="btn btn-warning">
                                <a href="/plates/{{$plate->id}}/edit" class="">Edit</a>   
                            </button>
                            <form method="POST" action="/plates/{{$plate->id}}" enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        @endauth
            </div>
        </div>
    </a>
        
    @endforeach

</div>
<div class="mt-2 w-75 pagination d-flex justify-content-center">{{$plates->links()}}</div>
@auth
<a href="/plates/create"><button class="btn btn-secondary">Add new plate</button></a>
@endauth

@endsection
