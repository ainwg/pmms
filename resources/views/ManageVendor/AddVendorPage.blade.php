@extends('layout')
@section('content')
<section class="bg-body-secondary">
    <div class="container">
        <!-- Page header with logo and tagline-->
        <div class="text-start py-3 px-3">
            <h1 class="fw-bolder">Add Vendor Form</h1>
        </div>

        <form action="/create" method="GET">
        {{csrf_field()}}

            <!-- Vendor Name -->
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Vendor Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter vendor name" required>
                </div>
            </div>
            <br>

            <!-- Contact Number -->
            <div class="form-group row">
                <label for="contact_number" class="col-sm-2 col-form-label">Contact Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter contact number" required>
                </div>
            </div>
            <br>

            <!-- Type of Vendor -->
            <div class="form-group row">
                <label for="vendor_type" class="col-sm-2 col-form-label">Type of Vendor</label>
                <div class="col-sm-10">
                    <select class="form-control" id="type_vendor" name="type_vendor" required>
                        <option value="">Select vendor type</option>
                        <option value="Food">Food</option>
                        <option value="Beverage">Beverage</option>
                        <option value="Utensils">Utensils</option>
                    </select>
                </div>
            </div>
            <br>

            <!-- Vendor Item -->
            <div class="form-group row">
                <label for="vendor_item" class="col-sm-2 col-form-label">Vendor Item</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="item" name="item" placeholder="Enter vendor item" rows="3" required></textarea>
                </div>
            </div>
            <br>

            <!-- Button Container -->
            <div class="btn-container text-end">
                <a href="/VendorMainPage" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary bg-primary" id="add_vendor_btn">Add Vendor</button>
            </div>
        </form>
    </div>
</body>
</section>
@endsection
