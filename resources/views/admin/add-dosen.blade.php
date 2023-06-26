<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">


            <div class="container" align="center" style="padding-top:100px;">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                        <button type="button" class="close" data-bs-dismiss="alert">
                            x
                        </button>
                    </div>
                @endif
                <form action="{{ url('upload-dosen') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Dosen</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Nama Dosen" style="color:black; background-color: white" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomor" class="form-label">No Telp</label>
                        <input type="text" class="form-control" id="nomor" name="nomor"
                            placeholder="Masukkan No Telp" style="color:black; background-color: white" required>
                    </div>
                    <div class="mb-3">
                        <label for="nidn" class="form-label">NIDN</label>
                        <input type="text" class="form-control" id="nidn" name="nidn"
                            placeholder="Masukkan NIDN" style="color:black; background-color: white" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan"
                            style="color:black; background-color: white">
                            <option value="">Pilih Jurusan</option>
                            <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                        </select>
                        <!-- Tambahkan opsi jurusan lainnya sesuai kebutuhan -->

                    </div>
                    <div class="mb-3">
                        <label for="fotoDosen" class="form-label">Foto Dosen</label>
                        <input type="file" class="form-control text-dark" name="foto" id="fotoDosen"
                            name="fotoDosen" required style="background-color: white">
                    </div>
                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-primary">

                    </div>

                </form>

            </div>
        </div>

        <!-- container-scroller -->
        @include('admin.js')
</body>

</html>
