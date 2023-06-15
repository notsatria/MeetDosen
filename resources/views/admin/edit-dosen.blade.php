<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
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
                <form action="{{ url('update-dosen', $dosenData->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Nama Dosen</label>
                        <input type="text" name="nama" value="{{ $dosenData->nama }}" placeholder="Nama Dosen"
                            style="color:black;">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">No Telp</label>
                        <input type="number" name="nomor" value="{{ $dosenData->telepon }}"
                            placeholder="Nomor Telepon" style="color:black;">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">NIDN</label>
                        <input type="number" name="nidn" value="{{ $dosenData->nidn }}" placeholder="NIDN"
                            style="color:black;">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="" style="color: black; width: 200px">
                            <option value="">{{ $dosenData->jurusan }}</option>
                            <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Foto Dosen</label>
                        <img src="foto-dosen/{{ $dosenData->photo }}" width="150px" alt="">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Edit Foto</label>
                        <input type="file" name="foto" style="">
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
