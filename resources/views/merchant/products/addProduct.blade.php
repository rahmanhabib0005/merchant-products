@extends('master')
@section('content')
    <div class="pagetitle">
        <h1>Create Product</h1>
        <nav>
            <ol class="breadcrumb">
                <ol class="breadcrumb-item">Product List</ol>
                <li class="breadcrumb-item active">Create Product</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-6">
                <form class="row g-3" action="{{ route('merchant.product-list.store') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="store_id" class="form-label">Select store</label>
                            <select class="form-select form-select-md" name="store_id" onchange="storeChange(this)" id="store_id">
                                <option selected>Select one</option>
                                @foreach ($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="store_category_id" class="form-label">Select store Category</label>
                            <select class="form-select form-select-md" name="store_category_id" id="store_category_id">
                                <option selected>Select one</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="name" class="form-label">Product Name</label>
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
@push('js')
    <script>
        const categories = @php echo json_encode($categories); @endphp;

        function storeChange(id) {
            let storeId = $(id).val();
            let storeCategory = $('#store_category_id');
            storeCategory.empty();
            storeCategory.append(`<option value="">Select one</option>`);
            
            $.each(categories, function(indexInArray, valueOfElement) {
                if (valueOfElement.store_id == storeId) {
                    storeCategory.append(`<option value="${valueOfElement.id}">${valueOfElement.name}</option>`);
                }
            });
        }
    </script>
@endpush
