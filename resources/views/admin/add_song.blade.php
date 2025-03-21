
@include('admin.header')
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      @include('admin.sidebar')
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('admin.navbar')
      <!--  Header End -->

      <div class="container-fluid w-50">
    <h1 class="display-5 text-center" style="color: purple;">Add Songs</h1>
    <form action="/upload_song" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-3">
            <input type="text" placeholder="Song Name" name="song" class="form-control border border-danger">  <!-- Corrected the input name -->
        </div>

        <div class="my-3">
            <label class="mb-2" for="">Song Image</label>
            <input type="file" class="form-control border border-danger" name="image">
        </div>

        <div class="my-3">
            <label class="mb-2" for="">Song File</label>
            <input type="file" class="form-control border border-danger" name="file">
        </div>

        <div class="my-3">
           <button class="btn btn-danger">Add Song</button>
        </div>
    </form>
</div>

</div>

    @include('admin.script')
    </div>
