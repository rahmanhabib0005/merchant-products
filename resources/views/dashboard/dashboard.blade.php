@extends('master')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <h1>Merchant List</h1>

            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">SI</th>
                        <th scope="col">Merchant Name</th>
                        <th scope="col">Merchant E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($merchants as $key => $merchant)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $merchant->name }}</td>
                            <td>{{ $merchant->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
