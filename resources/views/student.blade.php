<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>


    <link href="{{ asset('assets/css/datatable.min.css')}}" rel="stylesheet">


    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style> --}}
</head>
<body>
<h1>Student Grades</h1>
<table class="table">
    <thead>
        <tr>
            <th>Number</th>
            <th>Student Fullname</th>
            <th>Department</th>
            <th>Midterm Grade</th>
            <th>Final Grade</th>
            <th>Cumulatative Grade</th>
        </tr>
    </thead>
    <tbody id="tablebody">

    </tbody>
</table>
</body>
<footer>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable.min.js')}}"></script>
    <script src="{{ asset('assets/js/js.js')}}"></script>
    <script src="{{ asset('assets/js/axios.min.js')}}"></script>
</footer>
</html>
