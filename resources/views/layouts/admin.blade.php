<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config("app.name", "Laravel") }}</title>

    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" />
    <!-- endinject -->

    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
    <!-- dashboard css -->
    <style>
      

      .highcharts-figure,
      .highcharts-data-table table {
          min-width: 310px;
          max-width: 800px;
          /* margin: 1em auto; */
      }

      .highcharts-data-table table {
          font-family: Verdana, sans-serif;
          border-collapse: collapse;
          border: 1px solid #ebebeb;
          margin: 10px auto;
          text-align: center;
          width: 100%;
          /* max-width: 500px; */
      }

      .highcharts-data-table caption {
          padding: 1em 0;
          font-size: 1.2em;
          color: #555;
      }

      .highcharts-data-table th {
          font-weight: 600;
          padding: 0.5em;
      }

      .highcharts-data-table td,
      .highcharts-data-table th,
      .highcharts-data-table caption {
          padding: 0.5em;
      }

      .highcharts-data-table thead tr,
      .highcharts-data-table tr:nth-child(even) {
          background: #f8f8f8;
      }

      .highcharts-data-table tr:hover {
          background: #f1f7ff;
      }

      g[transform] text{
        font-size:15px !important;
      }
      g.highcharts-xaxis-labels text {
        font-size: 15px !important;
      }

      /* Info Cards */
.info-card {
    padding-bottom: 10px;
}

    .info-card h6 {
        font-size: 28px;
        color: #012970;
        font-weight: 700;
        margin: 0;
        padding: 0;
    }

.card-icon {
    font-size: 32px;
    line-height: 0;
    width: 64px;
    height: 64px;
    flex-shrink: 0;
    flex-grow: 0;
}

.sales-card .card-icon {
    color: #4154f1;
    background: #f6f6fe;
}

.revenue-card .card-icon {
    color: #2eca6a;
    background: #e0f8e9;
}

.customers-card .card-icon {
    color: #ff771d;
    background: #ffecdf;
}



/* Card */
.card {
    margin-bottom: 30px;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
}

.card-title {
    padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: white;
    font-family: "Poppins", sans-serif;
}

.card-body h2 {
  font-size: 20px !important;
  color: white !important;
}

    .card-title span {
        color: #899bbd;
        font-size: 14px;
        font-weight: 400;
    }

.card-body {
    padding: 0 20px 20px 20px;
}
    </style>
    @livewireStyles
  </head>
  <body>

    <div class="container-scroller">

      @include('layouts.inc.admin.navbar')
      <div class="container-fluid page-body-wrapper">
        @include('layouts.inc.admin.sidebar')
        <div class="main-panel">
          <div class="content-wrapper">@yield('content')</div>
        </div>
      </div>
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('admin/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js"></script>
    <script src="{{ asset('admin/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/js/dashboard.js"></script>
    <script src="{{ asset('admin/js/data-table.js"></script>
    <script src="{{ asset('admin/js/jquery.dataTables.js"></script>
    <script src="{{ asset('admin/js/dataTables.bootstrap4.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />

    <!-- End custom js for this page-->
    @yield('scripts') @livewireScripts @stack('script')
  </body>
</html>
