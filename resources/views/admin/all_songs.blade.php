<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song</title>

    <!-- Include CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/styles.min.css') }}">
    <!-- Add other CSS files as needed -->
</head>
<body>
    <!-- Include header -->
    @include('admin.header')

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            @include('admin.sidebar')
        </aside>
        <!-- Sidebar End -->
        
        <div class="body-wrapper">
            <!-- Header Start -->
            @include('admin.navbar')
            <!-- Header End -->

            <div class="container-fluid w-75">
    <h1 class="display-5 text-center">All Songs</h1>
    <table class="table border table-bordered border-danger">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>File</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($songs as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->song }}</td>
                    <td><img style="height: 50px;" src="{{ url('songimage', $b->image) }}" alt=""></td>
                    <td><a target="_blank" href="{{ url('songfile', $b->file) }}" class="btn btn-primary btn-sm">Play Song</a></td>
                    <td>
                        <a href="{{ url('/edit_song', $b->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a onclick="return confirm('Are you sure?')" href="{{ url('/delete_song', $b->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>        
</div>

            <!-- Include JavaScript Files -->
            <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
            <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
            <!-- Add other JS files as needed -->

            @include('admin.script')
        </div>
    </div>
</body>
</html>