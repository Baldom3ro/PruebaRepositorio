<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Verde Bosque</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-green {
          background: #1d911f;
            color: white;
        }

        .navbar-green .navbar-nav .nav-link {
            color: white;
            transition: color 0.3s;
        }

        .navbar-green .navbar-nav .nav-link:hover {
            color: #A9DFBF; /* Un verde más claro para el hover */
        }

        .navbar-green .navbar-toggler {
            border-color: white;
        }

        .navbar-green .navbar-toggler-icon {
            background-color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-green">
        <div class="container-fluid">
            <i class="fa-solid fa-heart" style="color: white; margin-right: 15px;"></i>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('dashboard.index')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('subjects.index')}}">Materias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teachers.index')}}">Profesores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('students.index')}}">Alumnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tutors.index')}}">Tutores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('inscriptions.index')}}">Inscripciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
