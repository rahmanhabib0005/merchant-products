@extends('master')
@section('content')
    <div class="pagetitle">
        <h1>Store List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Store List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <h1>Store List</h1>
            <div class="text-end my-2">
                <a href="{{ route('merchant.store-list.create') }}"><button type="submit" class="btn btn-primary">Add Store</button></a>
            </div>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">SI</th>
                        <th scope="col">Author</th>
                        <th scope="col">Store Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stores as $key => $store)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $store->merchant->name }}</td>
                            <td>{{ $store->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
