<!DOCTYPE html>
<html>
<head>
    <title>Statement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        table th {
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Statement</h1>
    <table>
        <tr>
            <th>Date:</th>
            <td>{{ $date }}</td>
        </tr>
        <tr>
            <th>Revenue (RM):</th>
            <td>{{ $revenue }}</td>
        </tr>
        <tr>
            <th>Expense (RM):</th>
            <td>{{ $expenses }}</td>
        </tr>
        <tr>
            <th>Profit (RM):</th>
            <td>{{ $profit }}</td>
        </tr>
    </table>
</body>
</html>
