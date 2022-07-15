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
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
          </div>
         
        </div>
      </div>
    </div>
 
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
                       <form action="{{ route('daftarmenu.store') }}" method="POST">
                           @csrf
                            <div class="form-group">
                                <label for="kategori_menu">Kategori</label>
                                <select name="kategori_menu" class="form-control" required>
                                    <option selected disabled>-- Pilih Kategori --</option>
                                    @foreach ( $kategorii as $i )
                                        <option value="{{ $i->id }}">{{ $i->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                            <div class="form-group">
                                <label for="kode_menu">Kode Menu</label>
                                <input type="text" class="form-control @error('kode_menu') is-invalid @enderror"
                                    name="kode_menu" value="{{ old('kode_menu') }}" placeholder="Ex : F001 -> *F inisial kategori" required>
                            
                                <!-- error message untuk title -->
                                @error('kode_menu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama_menu">Nama Menu</label>
                                <input type="text" class="form-control @error('nama_menu') is-invalid @enderror"
                                    name="nama_menu" value="{{ old('nama_menu') }}" required>
                            
                                <!-- error message untuk title -->
                                @error('nama_menu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ old('harga') }}" required>
                            
                                <!-- error message untuk title -->
                                @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                           <button type="submit" class="btn btn-md btn-primary">Save</button>
                           <a href="{{ route('daftarmenu.index') }}" class="btn btn-md btn-secondary">back</a>

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
</body>
</html>