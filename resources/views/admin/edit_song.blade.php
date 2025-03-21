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

            <div class="container w-50 my-5">
                <h1 class="display-5 text-center" style="color: purple;">Edit Song</h1>
                <form action="{{ url('/update_song/' . $song->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <label>Song Name</label>
                        <input type="text" name="song" value="{{ $song->song }}" required class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <label>Song Image</label>
                        <input type="file" name="image" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <label>Song File</label>
                        <input type="file" name="file" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary">Update Song</button>
                    </div>
                </form>
                <a href="{{ url('/all_songs') }}" class="btn btn-secondary">Back to All Songs</a>
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

