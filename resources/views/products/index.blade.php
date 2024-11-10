@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <h2 class="float-left">Laravel</h2>
        <a class="btn btn-success float-right" href="{{ route('products.create') }}"> Create New Product</a>
    </div>
</div>
<div class="row mb-2">
    <div class="col-12">
        <form action="{{ route('products.index') }}" method="GET">
            <div class="form-inline float-right">
                <input type="text" class="form-control mr-2" name="search" placeholder="Search..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-light">Search</button>
            </div>
        </form>
    </div>
</div>
@if(session('success'))
<div class="alert alert-success" role="alert">{{ session('success') }}</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Price (RM)</th>
        <th>Details</th>
        <th>Publish</th>
        <th>Action</th>
    </tr>
    @forelse ($products as $product)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->detail }}</td>
        <td>{{ $product->publish ? 'Yes' : 'No' }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6">There are no products available.</td>
    </tr>
    @endforelse
</table>
@endsection
