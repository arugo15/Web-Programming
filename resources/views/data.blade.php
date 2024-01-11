<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">Dashboard</a>
        <a class="navbar-brand" href="/about">About</a>
        <a class="navbar-brand" href="/data">Data</a>
        <a class="navbar-brand" href="/login">Login</a>
    </div>
</nav>

<div class="container mt-4">
    <h1>Data Siswa</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Urutan</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $item)
                <tr>
                    <td>{{ $item['urutan'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['nim'] }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{route('deleteSiswa', ['id' => $item->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger delete-btn" data-id="{{ $item['id'] }}">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('siswa.create') }}" class="btn btn-success">Add New</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-Vkoo8UVhEC3+G6F7YAd8vyEaNP2XipdYhI7vxSfMVBnE+IbbVn6+2hkNQ2ci6Np" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-lZh5vR2lXjiGRvy5OiCO6ojgkYPfybPPh1/JSEbELALYYZC4ZO3SCsFzksxUsRYC" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        // Add a click event for the delete button
        $('.delete-btn').click(function () {
            // Confirm deletion
            if (confirm('Are you sure you want to delete this record?')) {
                // Get the record ID from the data-id attribute
                var id = $(this).data('id');

                // Send an AJAX request to the server
                $.ajax({
                    url: '/siswa/delete/' + id, // Update the route to your delete method
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function () {
                        // Reload the page or update the table
                        location.reload();
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    });
</script>

</body>
</html>
