@extends('layouts.Master')
@section('title','Home')

@section('content')

<div style="width:100%">

    <p class="fs-2 bg-secondary text-white"> Book List</p>

    <div class="row d-flex justify-content-center">
        @foreach ($books as $book)
        <div class="card" style="width: 18rem;">
            <img src="{{$book->image}}" class="card-img-top" >
            <div class="card-body">
            <h5 class="card-title">{{$book->title}}</h5>
            <p class="card-text">by: {{$book->author}}</p>
            <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach
    </div>


</div>
@endsection
