@extends('master')
@section('content')
    <div class="pagetitle">
        <h1>Create Store</h1>
        <nav>
            <ol class="breadcrumb">
                <ol class="breadcrumb-item">Store List</ol>
                <li class="breadcrumb-item active">Create Store</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-6">
                <form class="row g-3" action="{{ route('merchant.store-list.store') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <label for="name" class="form-label">Store Name</label>
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
