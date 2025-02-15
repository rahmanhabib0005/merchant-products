@extends('master')
@section('content')
    <div class="pagetitle">
        <h1>Store Category List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Store Category List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <h1>Store Category List</h1>
            <div class="text-end my-2">
                <a href="{{ route('merchant.store-category.create') }}"><button type="submit" class="btn btn-primary">Add Store Category</button></a>
            </div>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">SI</th>
                        <th scope="col">Author</th>
                        <th scope="col">Store Name</th>
                        <th scope="col">Store Category Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($storeCategories as $key => $category)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $category->merchant->name }}</td>
                            <td>{{ $category->store->name }}</td>
                            <td>{{ $category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
