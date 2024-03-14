<!DOCTYPE html>
<html lang="en">

<head>
  <title>Presensi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="{{ asset('AdminCss/dist/css/adminx.css')}}" media="screen" />

  <!--
      # Optional Resources
      Feel free to delete these if you don't need them in your project
    -->
</head>

<body>
  <div class="adminx-container">
    @include('template.navbar')

    <!-- expand-hover push -->
    <!-- Sidebar -->
    @include('template.sidebar1')
    <!-- Sidebar End -->

    <!-- adminx-content-aside -->
    <div class="adminx-content">

      <div class="adminx-main-content">
        <div class="container-fluid">
          <!-- BreadCrumb -->
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb adminx-page-breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>

          <div class="pb-3">
            <h1>Dashboard</h1>
          </div>


          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div class="card-header-title">Featured</div>

                  <nav class="card-header-actions">
                    <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                      <i data-feather="minus-circle"></i>
                    </a>
                  </nav>
                </div>
                <div class="card-body collapse show" id="card1">

                  <h4>Selamat Datang </h4>
                  <div class="digital_clock_wrapper">
                    <div id="digit_clock_time"></div>
                    <div id="digit_clock_date"></div>
                  </div>
                </div>

                <!-- <h4 class="card-title">Special title treatment</h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                Featured
              </div>
              <div class="card-body">
                
                <!-- <h4 class="card-title">Special title treatment</h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- If you prefer jQuery these are the required scripts -->

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="{{ asset('AdminCss/dist/js/vendor.js')}}"></script>
  <script src="{{ asset('AdminCss/dist/js/adminx.js')}}"></script>

  <!-- If you prefer vanilla JS these are the only required scripts -->
  <!-- script src="./dist/js/vendor.js"></script>
  <script src="./dist/js/adminx.vanilla.js"></script-->
</body>

</html>