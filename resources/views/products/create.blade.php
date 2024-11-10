@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <h2 class="float-left">Add New Product</h2>
        <a class="btn btn-primary float-right" href="{{ route('products.index') }}">Back</a>
    </div>
</div>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Price (RM):</strong>
                <input type="number" step="0.01" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="99.90">
                @error('price')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control @error('detail') is-invalid @enderror" rows="6" name="detail" placeholder="Detail"></textarea>
                @error('detail')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Publish:</strong>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" id="publish_yes" value="1" checked>
                    <label class="form-check-label" for="publish_yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" id="publish_no" value="0">
                    <label class="form-check-label" for="publish_no">No</label>
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
