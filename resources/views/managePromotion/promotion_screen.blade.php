@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>List of Promotions</title>
    <style>
        .promotion {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }

        .promotion h3 {
            margin: 0;
        }

        .promotion p {
            margin: 5px 0;
        }

        .actions {
            margin-top: 10px;
        }

        .edit-button, .delete-button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px;
        }

        .delete-button {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <h1>Staff List</h1>
    <button class="add-button" ><a href="{{ route('promotion.add231')}} ">Add321</a></button>
    
    <div class="promotion">
    @foreach($promotion as $promotions)
        <h3>{{$promotions['title']}}</h3>
        <p>Description: {{$promotions['description']}}1</p>
        <p>Start Date: {{$promotions['time_start']}}</p>
        <p>End Date: {{$promotions['time_end']}}</p>
        <div class="actions">
        <button><a href="{{ route('promotion.edit', $promotions['id']) }} ">Edit</a></button>
        <button><a href="{{ route('promotion.delete', $promotions['id']) }}">Delete</a></button>
        </div>
        <hr>
        @endforeach
    </div>
    

</body>
</html>
<script>
    function addPromotion() {
                // Implement the logic to add a new staff member
                // This function is called when the "Add" button is clicked
                window.location.href = '/addpromotion'
                console.log('Add button clicked');
            }
</script>
</section>
@endsection
