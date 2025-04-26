<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>

    <link href="{{ asset('assets/css/datatable.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/mdb.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/css.css') }}" rel="stylesheet">
    {{--
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 20px;
            text-align: center;
        }
        h1 {
            color: #007BFF;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .table-container {
            width: 90%;
            margin: auto;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
        }
        th {
            background: linear-gradient(45deg, #007BFF, #0056b3);
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        tr:nth-child(even) {
            background-color: #f1f1f1;
        }
        tr:hover {
            background-color: #e0e0e0;
            transition: 0.3s;
        }
        .action-btn {
            padding: 8px 12px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }
        .action-btn:hover {
            background-color: #0056b3;
        }
    </style> --}}
</head>
<body>
    @include('modal.add-student')
    <section class="p-5">
        <div class="container mt-5">
            <h1 class="text-center text-primary mb-4">Student Details</h1>
            <div>
                <button type="button" class="btn btn-success addStudent" data-mdb-ripple-init>Add Student</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped studentsTable text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr>
                            <td>1</td>
                            <td>Jane</td>
                            <td>Smith</td>
                            <td>
                                <button class="btn btn-warning btn-sm mx-1">Edit</button>
                                <button class="btn btn-danger btn-sm mx-1">Delete</button>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</body>
<footer>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable.min.js') }}"></script>
    <script src="{{ asset('assets/js/axios.min.js') }}"></script>
    <script src="{{ asset('assets/js/js.js') }}"></script>
    <script src="{{ asset('assets/js/mdb.umd.min.js') }}"></script>
</footer>
</html>
