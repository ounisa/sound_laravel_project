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
      <div class="container-fluid bg-white " style="border-color: 2px solid red;">
        <table class="table table-bordered">
            <thead>
                <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Remarks</th>
            <th>Comment</th>
            <th>Rating</th>
                </tr>
            </thead>
            <tbody>
            @if($feedbacks->isEmpty())
            <tr>
                <td colspan="5">No feedback available.</td>
            </tr>
        @else
            @foreach($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->remarks }}</td>
                    <td>{{ $feedback->comment }}</td>
                    <td>{{ $feedback->rating }}</td>
                </tr>
            @endforeach
        @endif
            </tbody>
        </table>
      </div>
    </div>
  </div>

  @include('admin.script')