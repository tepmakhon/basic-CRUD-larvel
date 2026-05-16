<!DOCTYPE html>
<html>
<head>
    <title>Shopping Import System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            height: 100vh;
            background: #0d6efd;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
            border-radius: 6px;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }

        .content {
            padding: 25px;
        }

        .card-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4>📦 Import System</h4>
            <hr>
            <a href="/">🏠 Dashboard</a>
            <a href="/items/create">➕ Add Item</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 content">

            @yield('content')

        </div>

    </div>
</div>

</body>
</html>