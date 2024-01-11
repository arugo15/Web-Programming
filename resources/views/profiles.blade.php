<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="card bg-secondary text-white">
            <div class="card-header bg-dark">
                <h1 class="mb-0">Profiles</h1>
            </div>

            <div class="card-body">
                <ul class="list-group">
                    @foreach($dataCollection as $profile)
                        <li class="list-group-item bg-dark text-white">{{ $profile }}</li>
                    @endforeach
                </ul>

                <button id="profilesButton" class="btn btn-primary mt-3">Show Profiles</button>
                <p id="result" class="mt-3" style="display: none;">{{ $profiles }}</p>
            </div>
        </div>
    </div>
</body>
</html>
