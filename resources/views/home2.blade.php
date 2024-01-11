<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | The University</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap JS (popper included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Dark Mode CSS -->
    <link id="dark-mode-css" href="path/to/dark-mode.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body.dark-mode {
            background-color: #333;
            color: #ffffff;
        }

        .navbar-brand {
            color: #000000 !important; /* Warna teks untuk navbar link */
        }

        .navbar-brand:hover {
            color: #ffffff !important; /* Warna teks saat navbar link dihover */
        }

        .navbar-toggler-icon, .navbar-dark .navbar-nav .nav-link {
            color: #ffffff !important; /* Warna teks untuk toggle icon dan navbar link */
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #eeeeee !important; /* Warna teks saat navbar link dihover */
        }

        .form-check-input {
            background-color: #ffffff;
        }

        .navbar-dark .navbar-nav .active > .nav-link {
            color: #000 !important;
        }

        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
            border-radius: 0.5rem;
            opacity: 0;
            animation: fadeIn 2s ease-in-out forwards;
        }

        .jumbotron h1 {
            color: #000000;
        }

        .jumbotron p {
            color: #6c757d;
        }

        .container {
            margin-top: 2rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar bg-body-tertiary navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">Home</a>
        <a class="navbar-brand" href="/about">About</a>
        <a class="navbar-brand" href="/data">Data</a>
        <a class="navbar-brand" href="/login">Login</a>

        <!-- Dark Mode Toggle -->
        <div class="form-check form-switch ms-auto">
            <input class="form-check-input" type="checkbox" id="darkModeToggle">
            <label class="form-check-label" for="darkModeToggle">Dark Mode</label>
        </div>
    </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron">
    <div class="container">
        <h1>Welcome to The University</h1>
        <p>Where Knowledge Meets Innovation</p>
    </div>
</div>

<!-- Main Content -->
<div class="container">
    <h2>Discover The University</h2>
    <p>Embark on a journey of academic excellence and personal growth at The University. Our commitment to innovation, research, and holistic education sets us apart.</p>

    <h2>Empowering Future Leaders</h2>
    <p>At The University, we believe in nurturing not just students but future leaders. Our diverse and vibrant community encourages collaboration and the exchange of ideas.</p>

    <h2>Explore Student Achievements</h2>
    <p>Get inspired by the stories of our talented students who have excelled in academics, sports, arts, and community service. Their achievements reflect the spirit of The University.</p>

    <a class="btn btn-primary" href="/data">View Student Profiles</a>
</div>

<!-- Dark Mode Script -->   
<script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    darkModeToggle.addEventListener('change', () => {
        body.classList.toggle('dark-mode', darkModeToggle.checked);
    });
</script>

</body>
</html>
