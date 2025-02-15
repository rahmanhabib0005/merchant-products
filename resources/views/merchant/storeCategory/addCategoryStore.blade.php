@extends('master')
@section('content')
    <div class="pagetitle">
        <h1>Create Store Category</h1>
        <nav>
            <ol class="breadcrumb">
                <ol class="breadcrumb-item">Store Category List</ol>
                <li class="breadcrumb-item active">Create Store Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-6">
                <form class="row g-3" action="{{ route('merchant.store-category.store') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="store_id" class="form-label">Select store</label>
                            <select class="form-select form-select-md" name="store_id" id="store_id">
                                <option selected>Select one</option>
                                @foreach ($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="col-12">
                        <label for="name" class="form-label">Store Category Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="text-start">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
