
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Daftar Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">

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
                        <form action="{{ route('daftarmenu.update', $daftarmenu->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="kode_menu">Kode</label>
                                <input type="text" class="form-control @error('kode_menu') is-invalid @enderror"
                                    name="kode_menu" value="{{ old('kode_menu', $daftarmenu->kode_menu) }}" required>
                            
                                <!-- error message untuk title -->
                                @error('kode_menu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_menu">Daftar Menu</label>
                                <select name="nama_menu" class="form-control" required>
                                    <option selected>Pilih Daftar Menu</option>
                                    <option value="GOI CUON BO">GOI CUON BO</option>
                                    <option value="BANH PHO CUON BO">BANH PHO CUON BO</option>
                                    <option value="CHA GIO SAIGON">CHA GIO SAIGON</option>
                                    <option value="BANH TRANG CHIEN GION">BANH TRANG CHIEN GION</option>
                                    <option value="BANH CUON-CHA">BANH CUON-CHA</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="kategori_menu">Kategori</label>
                                <select name="kategori_menu" class="form-control" required>
                                    <option selected>Kategori</option>
                                    <option value="Food">Food</option>
                                    <option value="Drink">Drink</option>
                                    <option value="Appetizer">Appetizer</option>

                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ old('harga', $daftarmenu->harga) }}" required>
                            
                                <!-- error message untuk title -->
                                @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('daftarmenu.index') }}" class="btn btn-md btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- include summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250, //set editable area's height
            });
        })
    </script>
</body>

</html>