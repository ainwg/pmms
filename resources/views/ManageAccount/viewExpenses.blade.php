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

    <div class="row">
      <div class="col">
        <h4>Expenses</h4>
      </div>
      <div class="col">
        <a href="{{ url('/account/add-expenses') }}" class="btn btn-primary" style="float:right">Add Expenses</a>
      </div>
    </div>
  
    <br>
    
    <div class="row">
      <div class="col">
        <label for="date" class="col-sm col-form-label">Select Date</label>
        <div class="col-sm">
        <div class="input-group date" id="datepicker">
            <input type="text" class="form-control" id="date">
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
              <th scope="col">#</th>
              <th scope="col">Expense Name</th>
              <th scope="col">Amount (RM)</th>
            </tr>
          </thead>
          <tbody id="expensesTable">
            {{-- Expenses will be added here --}}
          </tbody>
        </table>
      </div>
    

  </div>
</div>
  
<script>
  $(function() {
    $('#datepicker').datepicker({
      format: 'dd-mm-yyyy' // Set the date format to match the database format
    });

    $('#date').on('change', function() {
      var selectedDate = $('#date').val();
      fetchExpenses(selectedDate);
    });
  });

  function fetchExpenses(date) {
  $.ajax({
    type: 'GET',
    url: "{{ route('expenses.get') }}",
    data: {
      date: date
    },
    success: function(response) {
      if (response.length > 0) {
        var expensesTable = '';
        var totalAmount = 0;
        for (var i = 0; i < response.length; i++) {
          var expense = response[i];
          expensesTable += '<tr>';
          expensesTable += '<td>' + (i + 1) + '</td>';
          expensesTable += '<td>' + expense.expense_name + '</td>';
          expensesTable += '<td>' + expense.expense_amount + '</td>';
          expensesTable += '</tr>';
          
          totalAmount += parseFloat(expense.expense_amount);
        }
        
        // Add the total amount row with Bootstrap classes and styling
        expensesTable += '<tr class="table-secondary">';
        expensesTable += '<td></td>';
        expensesTable += '<td><strong>Total</strong></td>';
        expensesTable += '<td><strong>' + totalAmount.toFixed(2) + '</strong></td>';
        expensesTable += '</tr>';

        $('#expensesTable').html(expensesTable);
      } else {
        $('#expensesTable').html('<tr><td colspan="3">No expenses found for the selected date.</td></tr>');
      }
    },
    error: function() {
      $('#expensesTable').html('<tr><td colspan="3">Error retrieving expenses.</td></tr>');
    }
  });
}
</script>
@endsection
