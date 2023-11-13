@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>Staff Details</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        

        .details {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style='text-align:center;'>Promotion Details</h1>
        <div class="details">
            <h2>{{ $promotiondetails['title'] }}</h2>
            <p>Description: {{ $promotiondetails['description'] }}</p>
            <p>Date Start: {{ $promotiondetails['time_start'] }}</p>
            <p>Date End: {{ $promotiondetails['time_end'] }}</p>
        </div>
    </div>
</body>
</html>
</section>
@endsection 