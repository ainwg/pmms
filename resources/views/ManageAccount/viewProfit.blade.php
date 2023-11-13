@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true">Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/account/view-expenses') }}">Expenses</a>
      </li>
    </ul>
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col">
        <h4>Sales</h4>
      </div>
      <div class="col">
        <a href="{{ url('/account/download-statement') }}" class="btn btn-primary" style="float:right">Download</a>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col">
        <label for="salesdate" class="col-sm col-form-label">Select Date</label>
        <div class="col-sm">
          <div class="input-group date" id="datepicker">
            <input type="text" class="form-control" id="salesdate">
            <span class="input-group-append">
              <span class="input-group-text bg-light d-block">
                <i class="fa fa-calendar"></i>
              </span>
            </span>
          </div>
        </div>
      </div>

      <div class="col-sm-8">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Revenue (RM)</th>
              <th scope="col">Expense (RM)</th>
              <th scope="col">Profit (RM)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td id="revenueAmount"></td>
              <td id="expenseAmount"></td>
              <td id="profitAmount"></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

<script type="text/javascript">
  $(document).ready(function() {
    $('#datepicker').datepicker({
      format: 'dd-mm-yyyy',
      todayHighlight: true,
      autoclose: true
    });

    $('#datepicker').on('changeDate', function() {
      var selectedDate = $('#salesdate').val();

      $.ajax({
        url: '{{ url('/account/get-profit-data') }}',
        type: 'GET',
        data: {
          date: selectedDate
        },
        success: function(data) {
          $('#revenueAmount').text(data.revenue);
          $('#expenseAmount').text(data.expense);
          $('#profitAmount').text(data.profit);
        }
      });
    });
  });
</script>

@endsection
