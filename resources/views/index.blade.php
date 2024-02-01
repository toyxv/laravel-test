@extends('master')

@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h3>Laravel</h3>
        <a class="btn btn-success" href="{{ route('create') }}">Create New Product</a>
    </div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    <div class="mb-4 float-right">
        <form action="{{ route('index') }}" method="GET" class="form-inline">
            <div class="form-group mr-2 text-right">
                <input type="text" name="query" class="form-control" placeholder="Search by name" value="{{ $query }}">
            </div>
            <button type="submit" class="btn btn-light">Search</button>
        </form>
    </div>
    
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price (RM)</th>
            <th>Detail</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->detail }}</td>
                <td>{{ $product->status == 1 ? 'Yes' : 'No'}}</td>
                <td>
                    <a href="{{ route('show', ['id' => $product->id]) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('edit', ['id' => $product->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('delete', ['id' => $product->id]) }}" method="POST" class="d-inline-block">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    <div class="d-flex justify-content-between">
        {{ $products->render() }}
    </div>

@endsection