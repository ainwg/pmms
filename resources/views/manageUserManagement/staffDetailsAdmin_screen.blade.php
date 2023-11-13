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

        .container {
            text-align: left;
        }

        .details {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            max-width: 400px;
            margin: 0 auto;
        }

        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style='text-align:center;'>Staff Details</h1>

        <div class="details">
            <h2>Name: {{ $staff_detail['name'] }}</h2>
            <p>Student ID: {{ $staff_detail['student_id'] }}</p>
            <p>Course Name: {{ $staff_detail['course_name'] }}</p>
            <p>Tel: {{ $staff_detail['phone_num'] }}</p>
            <p>Email: {{ $staff_detail['email'] }}</p>
            <button class="button" ><a href="{{ route('admin.attendance', $staff_detail['student_id']) }}">Attendance</button>
        </div>

        
    </div>
</body>
</html>
<script>
    function showAttendance(staffName) {
                window.location.href = 'attendance'
            }
</script>
</section>
@endsection 