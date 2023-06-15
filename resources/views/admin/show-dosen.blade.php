<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
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
            <div class="py-5 mx-auto">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>NIDN</th>
                            <th>Jurusan</th>
                            <th>Foto</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($dosenData as $dosen)
                            <tr>
                                <td>
                                    <p class="fw-bold mb-1">{{ $dosen->nama }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $dosen->telepon }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $dosen->nidn }}</p>

                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $dosen->jurusan }}</p>

                                </td>
                                <td>
                                    <img src="foto-dosen/{{ $dosen->photo }}" alt="">

                                </td>
                                <td>
                                    <a href="{{ url('delete-dosen', $dosen->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin menghapus data Dosen?')"><i
                                            class="mdi mdi-delete-empty"></i></a>
                                </td>
                                <td>
                                    <a href="{{ url('edit-dosen', $dosen->id) }}" class="btn btn-warning"><i
                                            class="mdi mdi-pen"></i></a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <!-- container-scroller -->
        @include('admin.js')
</body>

</html>
