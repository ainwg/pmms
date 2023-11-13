@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Report Page</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="" />
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">
    <style>

        .container {
            text-align: left;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 0px;
            margin-top: 0px;
        }

        .navigation {
            display: flex;
            margin-bottom: 30px;
        }

        .navigation a {
            text-decoration: none;
            padding: 10px 15px;
            background-color: #f8f9fa;
            color: #000;
            border: 1px solid #ccc;
            border-radius: 0;
        }

        .navigation a:hover {
            background-color: #e9ecef;
        }

        .content-box {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Monthly Report Page</h1>

        <div class="navigation">
            <a href="/WeeklyReportPage">Weekly</a>
            <a href="/MonthlyReportPage">Monthly</a>
            <a href="/YearlyReportPage">Yearly</a>
            <a href="/StockReportPage">Stock</a>
        </div>

        <div class="content-box">
            <!-- Content goes here -->
            
        </div>
        <br>

        <div class="btn-container text-end">
                <a href="/WeeklyReportPage" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-primary" id="save_btn">Save</button>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.js"></script>
    <!-- Custom script -->
    <script>
    </script>
</body>
</html>
@endsection
