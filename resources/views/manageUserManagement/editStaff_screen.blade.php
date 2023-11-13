@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Staff</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: left;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            padding: 5px;
            width: 300px;
            border-radius: 4px;
            border: 1px solid #ccc;
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
        <h1>Edit Staff</h1>

        <form action="/stafflistadmin/{{$staff->id}}/update" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{$staff->name}}" >
            </div>
            <div class="form-group">
                <label for="student-id">Student ID:</label>
                <input type="text" id="student_id" name="student_id" value="{{$staff->student_id}}" >
            </div>
            <div class="form-group">
                <label for="course-name">Course Name:</label>
                <input type="text" id="course_name" name="course_name" value="{{$staff->course_name}}" >
            </div>
            <div class="form-group">
                <label for="tel">Telephone:</label>
                <input type="tel" id="phone_num" name="phone_num" value="{{$staff->phone_num}}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{$staff->email}}">
            </div>

            <button class="button" onclick="close()" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<script>
    function close(){
        window.location.href = 'stafflist'
    }
</script>
</section>
@endsection 