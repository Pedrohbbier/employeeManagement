<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Departments</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .header-section {
            text-align: center;
            margin-bottom: 2rem;
        }
        .header-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .header-section p {
            font-size: 1.25rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="header-section">
            <h1><i class="fas fa-building"></i> Departments</h1>
            <p>Manage your organization's departments</p>
        </div>
        <div class="card p-4 mb-4">
            <div class="card-body">
                <a href="{{ route('departments.create') }}" class="btn btn-custom mb-3"><i class="fas fa-plus"></i> Add Department</a>
                <ul class="list-group">
                    @foreach ($departments as $department)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-building"></i> {{ $department->name }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
