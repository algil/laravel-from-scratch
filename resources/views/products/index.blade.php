@extends('layouts.app')

@section('content')
<h1>List of products</h1>

<a class="btn btn-primary mb-3" href="{{ route('products.create') }}">New product</a>

@empty($products)
<div class="alert alert-warning">
    The product list is empty
</div>
@else
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Status</th>
            <th>Actions</th>
        </thead>

        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->status }}</td>
                <td>
                    <a class="btn btn-link" href="{{ route('products.show', $product->id) }}">View</a>
                    <a class="btn btn-link" href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endempty
@endsection
