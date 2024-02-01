@extends('master')

@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h3>Show Product</h3>
        <a class="btn btn-primary" href="{{ route('index') }}">Back</a>
    </div>

    <div class="row">
        <p><b>Name:</b> {{$product->name}}</p>
    </div>
    <div class="row">
        <p><b>Price:</b> {{$product->price}}</p>
    </div>
    <div class="row">
        <p><b>Detail:</b> {{$product->detail}}</p>
    </div>
    <div class="row">
        <p><b>Publish:</b> {{$product->status ? 'Yes' : 'No'}}</p>
    </div>
@endsection