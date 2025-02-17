<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | GoPOS</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4>GoPOS</h4>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#">Superadmin</a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    ☰
                </button>
                <h5 class="mb-0">Dashboard</h5>
                <div>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <h3>Welcome, Superadmin</h3>
            <p>Manage all businesses and users from here.</p>
        </div>
    </div>
</div>

<!-- Sidebar Toggle Script -->
<script>
    document.getElementById("sidebarCollapse").addEventListener("click", function () {
        document.getElementById("sidebar").classList.toggle("active");
    });
</script>

</body>
</html>
