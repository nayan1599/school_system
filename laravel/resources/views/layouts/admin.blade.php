<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark p-3">
        <a href="#" class="navbar-brand">🎓 School Admin Panel</a>
        <div>
            <a href="{{ route('logout') }}" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="btn btn-danger btn-sm">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Students</a>
                    <a href="#" class="list-group-item list-group-item-action">Teachers</a>
                    <a href="#" class="list-group-item list-group-item-action">Classes</a>
                    <a href="#" class="list-group-item list-group-item-action">Subjects</a>
                    <a href="#" class="list-group-item list-group-item-action">Exams</a>
                    <a href="#" class="list-group-item list-group-item-action">Settings</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
