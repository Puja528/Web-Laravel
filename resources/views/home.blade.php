<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .navbar-brand { font-weight: bold; }
        .navbar { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .hero-section {
            background-color: #3187e9;
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .hero-section h1 { font-size: 3rem; }
        .card { margin-top: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #f8f9fa;
            text-align: center;
        }
        .footer p { margin: 0; font-size: 0.9rem; color: #6c757d; }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Biodata</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>{{ $name }}</h1>
            <p>{{ $my_age }} tahun</p>
            <p class="lead mb-0">{{ $future_goal }}</p>
        </div>
    </section>

    <!-- Content Section -->
    <section id="content" class="container ">
        <div class="row">
            <div class="col-md-6">
                <!-- Biodata Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Kuliah</h5>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Semester:</strong> {{ $current_semester }}</li>
                            <li class="list-group-item"><strong>Motivasi:</strong> {{ $motivasi }}</li>
                            <li class="list-group-item"><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda }}</li>
                            <li class="list-group-item"><strong>Sisa Waktu Kuliah:</strong> {{ $time_to_study_left }} hari</li>
                        </ul>
                    </div>
                </div>

                <!-- Hobi -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hobi</h5>
                        <ul class="list-group">
                            @foreach($hobbies as $hobi)
                                <li class="list-group-item">{{ $hobi }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Motivasi -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Pesan Motivasi</h3>
                        <div class="alert alert-info">
                            {{ $motivasi }}
                        </div>
                    </div>
                </div>

                <!-- Last Login Example -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Last Login</h3>
                        <p class="text-muted">{{ $last_login ?? 'Belum ada data' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{date('Y')}} My Laravel App. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
