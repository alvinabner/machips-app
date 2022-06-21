@extends('layouts.admin')

@section('title')
    Product
@endsection

@section('content')
    <div class="container">
        <div class='card'>
            <div class='card-header'>
                <div class="float-start">
                    Product
                </div>
                <div class="float-end">
                    <a class="btn btn-dark" href="{{ route('product.create') }}">Create New Product</a>
                </div>
            </div>
            <div class='card-body'>
                
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Photo Product</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr>
                        <th>{{ $key+1 }}</th>
                        <td><img src="{{ asset('storage/'.$product->avatar) }}" alt="" width="100px"> </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->desc }}</td>
                        <td>Rp.{{ number_format($product->price) }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a href="{{ route('product.edit', [$product->id]) }}" class="btn btn-primary">Edit</a>
                            <form
                                onsubmit="return confirm('Are you sure?')"
                                class="d-inline"
                                action="{{route('product.destroy', [$product->id])}}"
                                method="POST">
                                    @csrf
                                    <input
                                    type="hidden"
                                    name="_method"
                                    value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br><br><br>
    </div>
@endsection