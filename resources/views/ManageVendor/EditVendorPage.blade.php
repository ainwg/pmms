@extends('layout')
@section('content')
<section class="bg-body-secondary">
    <div class="container">
        <!-- Page header with logo and tagline-->
        <div class="text-start py-3 px-3">
            <h1 class="fw-bolder">Edit Vendor Page</h1>
        </div>

        <form action="/UpdateVendorPage/{{$data_vendor->id}}/update" method="POST">
            {{csrf_field()}}
            
            <!-- Vendor Name -->
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Vendor Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter vendor name" value="{{$data_vendor->name}}">
                </div>
            </div>
            <br>

            <!-- Contact Number -->
            <div class="form-group row">
                <label for="contact_number" class="col-sm-2 col-form-label">Contact Number</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter contact number" value="{{$data_vendor->contact_number}}" required>
                </div>
            </div>
            <br>

            <!-- Type of Vendor -->
            <div class="form-group row">
                <label for="vendor_type" class="col-sm-2 col-form-label">Type of Vendor</label>
                <div class="col-sm-6">
                    <select class="form-control" id="vendor_type" name="type_vendor" required>
                        <option value="">Select vendor type</option>
                        <option value="Food" @if($data_vendor->type_vendor == 'Food') selected @endif >Food</option>
                        <option value="Beverage" @if($data_vendor->type_vendor == 'Beverage') selected @endif >Beverage</option>
                        <option value="Utensils" @if($data_vendor->type_vendor == 'Utensils') selected @endif >Utensils</option>
                    </select>
                </div>
            </div>
            <br>

            <!-- Vendor Item -->
            <div class="form-group row">
                <label for="vendor_item" class="col-sm-2 col-form-label">Vendor Item</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="vendor_item" name="item" placeholder="Enter vendor item" rows="3" required>
                    {{$data_vendor->item}}
                    </textarea>
                </div>
            </div>
            <br>
            
            <!-- Button Container -->
            <div class="col-sm-6">
                <div class="btn-container text-end">
                    <a href="/ViewVendorPage" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary" id="update_vendor_btn">Update</button>
                </div>
            </div>
        </form>
    </div>
</section>
</html>
@endsection
