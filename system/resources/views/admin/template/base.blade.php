<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

@include('section-admin.assets')
  
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('section-admin.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- TopBar -->
       @include('section-admin.header')
      <div id="content">
      
      <div class="container-fluid">

     @yield('content')

      </div>

      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        @include('section-admin.footer')
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 @include('section-admin.js')


  <script src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js/"></script>
    <script src="{{url('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.bootstrap4.min.js"></script>
   <script>
   $(".table-datatable").DataTable();
  </script>
    <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>

</html>