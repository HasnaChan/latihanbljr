@extends('layouts.Master')
@section('title','Publisher Detail')

@section('content')

<div style="width:100%">

    <div class="fs-4 bg-secondary text-white mb-2">
        <div>
            {{ $publishers->name }}
        </div>
        <div>
            Address - {{ $publishers->address }}
        </div>
        <div>
            Phone - {{ $publishers->phone }}
        </div>
        <div>
            Email - {{ $publishers->email }}
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        @if (count($publishers->Book))
            @foreach ($publishers->Book as $book)
                <div class="card" style="width: 18rem;">
                    <img src="{{$book->image}}" class="card-img-top" >
                    <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">by: {{$book->author}}</p>
                    <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>

            @endforeach
        @else
            No data...
        @endif

    </div>


</div>

@endsection
