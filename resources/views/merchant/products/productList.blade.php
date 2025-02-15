@extends('master')
@section('content')
    <div class="pagetitle">
        <h1>Product List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Product List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="text-end my-2">
                <a href="{{ route('merchant.product-list.create') }}"><button type="submit" class="btn btn-primary">Add Product</button></a>
            </div>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">SI</th>
                        <th scope="col">Author</th>
                        <th scope="col">Store Name</th>
                        <th scope="col">Store Category Name</th>
                        <th scope="col">Product Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $product->merchant->name }}</td>
                            <td>{{ $product->store->name }}</td>
                            <td>{{ $product->store_category->name }}</td>
                            <td>{{ $product->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
