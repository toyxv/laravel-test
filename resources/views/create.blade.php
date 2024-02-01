@extends('master')

@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h3>Add New Product</h3>
        <a class="btn btn-primary" href="{{ route('index') }}">Back</a>
    </div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    <form action="{{ route('store') }}" method="POST">

        @csrf
        <div class="form-group">
            <label class="font-weight-bold">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Price:</label>
            <input type="text" name="price" class="form-control" placeholder="99.90">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Detail:</label>
            <textarea name="detail" rows="5" placeholder="Detail" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Publish:</label>
            <br>
            <input type="radio" name="status" value="1" checked >
            <label>Yes</label>
            <br>
            <input type="radio" name="status" value="0">
            <label>No</label>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection