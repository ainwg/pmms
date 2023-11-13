@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/account/view-profit') }}">Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="true">Expenses</a>
        </li>
      </ul>
    </div>
    <div class="card-body">

        <h4>Add Expenses</h4>

        <br>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/account/insert-expenses') }}" method="POST">
            @csrf
            <div class="row form-group">
                <label for="date" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-4">
                    <div class="input-group date" id="datepicker">
                        <input type="text" name="expense_date" class="form-control" id="date" required>
                        <span class="input-group-append">
                            <span class="input-group-text bg-light d-block">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
    
            <br>
    
            <div class="row form-group">
                <label for="date" class="col-sm-2 col-form-label">Expense Name</label>
                <div class="col-sm-4">
                    <input type="text" name="expense_name" class="form-control" required>
                </div>
            </div>
    
            <br>
    
            <div class="row form-group">
                <label for="date" class="col-sm-2 col-form-label">Expense Amount (RM)</label>
                <div class="col-sm-4">
                    <input type="text" name="expense_amount" class="form-control" required>    
                </div>
            </div>
            
            <br>
            <br>
    
            <button type="submit" class="btn btn-primary bg-primary">Submit</button>
            <a href="{{ url('/account/view-expenses') }}" class="btn btn-danger">Back</a>

        </form>

    </div>


    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({
                format: 'dd-mm-yyyy', // Set the desired date format
                autoclose: true // Close the datepicker when a date is selected
            });
        });
    </script>

@endsection