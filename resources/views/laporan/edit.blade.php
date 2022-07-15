<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Saigon Delight</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<body>
  <div class="container-scroller d-flex">
{{-- Sidebar --}}
@include('template.sidebar')
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      @include('template.navbar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                  <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('laporan.update', $laporan->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama_menu">Nama_Menu</label>
                                <select name="nama_menu" id="nama_menu" class="form-control" required>
                                    <option selected>Pilih Daftar Menu</option>
                                    @foreach ( $daftarmenu as $i )
                                      <option value="{{ $i->id }}">{{ $i->nama_menu }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- <div class="form-group">
                                <label for="harga_menu">Harga Menu</label>
                                <input type="text" class="form-control @error('harga_menu') is-invalid @enderror"
                                    name="harga_menu" value="{{ old('harga_menu', $laporan->harga_menu) }}" required>

                                <!-- error message untuk title -->
                                @error('harga_menu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" class="form-control @error('jumlah') is-invalid @enderror"
                                    name="jumlah" value="{{ old('jumlah', $laporan->jumlah) }}" required>

                                <!-- error message untuk title -->
                                @error('jumlah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> --}}

                            <div class="form-group">
                                <label for="total">Total</label>
                                <input type="text" class="form-control @error('total') is-invalid @enderror"
                                    name="total" value="{{ old('total', $laporan->total) }}" required>

                                <!-- error message untuk title -->
                                @error('total')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('laporan.index') }}" class="btn btn-md btn-secondary">back</a>
                        </form>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../js/jquery.cookie.js" type="../..text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
    <script src="../../js/jquery.cookie.js" type="../..text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <!-- End custom js for this page-->

  <script>
    var options = document.getElementById("nama_menu").options;
    for (var i = 0; i < options.length; i++) {
      if (options[i].text == "{{ $getmenu['nama_menu']; }}") {
        options[i].selected = true;
        break;
      }
    }
  </script>
</body>
</html>