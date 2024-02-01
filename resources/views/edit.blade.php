@extends('master')

@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h3>Edit Product</h3>
        <a class="btn btn-primary" href="{{ route('index') }}">Back</a>
    </div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    <form action="{{ route('update', ['id' => $product->id]) }}" method="POST">

        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control" placeholder="99.90" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label>Detail</label>
            <textarea name="detail" rows="5" placeholder="detail" class="form-control">{{ $product->detail }}</textarea>
        </div>
        <div class="form-group">
            <label>Publish</label>
            <br>
            <input type="radio" name="status" value="1" {{($product->status == 1 ? 'checked': '')}}>
            <label>Yes</label>
            <br>
            <input type="radio" name="status" value="0" {{($product->status == 0 ? 'checked': '')}}>
            <label>No</label>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection