@extends('layouts.Master')
@section('title','Home')

@section('content')

<div style="width:100%">

    <p class="fs-2 bg-secondary text-white"> Book List</p>

    <div class="d-flex row justify-content-start gap-1 m-1">
        {{-- @foreach ($books as $book) --}}
        <div class="card" style="width: 30rem;">
            <img src="{{$books->image}}" class="card-img-top" >
            <div class="card-body">
            <h5 class="card-title">Title: {{$books->title}}</h5>
            <p class="card-text">Author: {{$books->author}}</p>
            <p class="card-text">Publisher: {{$books->Publisher->name}}</p>
            <p class="card-text">Year: {{$books->year}}</p>
                @if($categories->count())
                    @foreach ($categories as $category)
                        <p class="card-text">Category {{ $loop->iteration }}: {{ $category->name }}</p>
                    @endforeach
                @else
                    <p class="card-text">Category : -</p>

                @endif

            <p class="card-text">Synopsis: {{$books->synopsis}}</p>
            <a href="/home" class="btn btn-primary">Back home</a>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>


</div>
@endsection
