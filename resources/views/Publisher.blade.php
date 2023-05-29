@extends('layouts.Master')
@section('title','Publisher')

@section('content')

<div style="width:100%">

    <p class="fs-2 bg-secondary text-white">All Publisher</p>

    <div class="d-flex row justify-content-start">
        @foreach ($publishers as $publisher)
        <div class="card" style="width: 18rem;">
            <img src="{{$publisher->image}}" class="card-img-top" >
            <div class="card-body">
            <h5 class="card-title">{{$publisher->name}}</h5>
            <p class="card-text">Address: {{$publisher->address}}</p>
            <a href="/publisherdetail/{{ $publisher->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach
    </div>


</div>

@endsection
