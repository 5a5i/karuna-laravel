@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <h2 class="float-left">Show Product</h2>
        <a class="btn btn-primary float-right" href="{{ route('products.index') }}">Back</a>
    </div>
</div>
<div class="row">
    <div class="form-group col-12">
        <strong>Name:</strong>
        {{ $product->name }}
    </div>
    <div class="form-group col-12">
        <strong>Price:</strong>
        RM {{ $product->price }}
    </div>
    <div class="form-group col-12">
        <strong>Details:</strong>
        {{ $product->detail }}
    </div>
    <div class="form-group col-12">
        <strong>Publish:</strong>
        {{ $product->publish ? 'Yes' : 'No' }}
    </div>
</div>
@endsection
