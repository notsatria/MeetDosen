<!DOCTYPE html>
<html lang="en">

<head>
    @include('dosen.css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/fixedcolumns/3.3.3/css/fixedColumns.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support,
                                updates,
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
        @include('dosen.sidebar')
        <!-- partial -->
        @include('dosen.navbar')


        <div class="container my-5">
            <h1>Daftar Appointment Anda</h1>
            <table id="myTable" class="table table-striped table-bordered align-middle bg-white">
                <thead>
                    <tr>
                        <th>Mahasiswa</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Dosen</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Approve</th>
                        <th>Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointmentData as $appointment)
                        <tr>
                            <td>
                                <p class="fw-bold mb-1">{{ $appointment->name }}</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $appointment->email }}</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $appointment->phone }}</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $appointment->dosen }}</p>

                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $appointment->date }}</p>

                            </td>
                            <td>
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myDialog"><i
                                        class="bi bi-envelope"></i></a>

                            </td>
                            @if ($appointment->status == 'In Progress')
                                <td>
                                    <span
                                        class="badge badge-warning rounded-pill d-inline">{{ $appointment->status }}</span>
                                </td>
                            @endif
                            @if ($appointment->status == 'Approved')
                                <td>
                                    <span
                                        class="badge badge-success rounded-pill d-inline">{{ $appointment->status }}</span>
                                </td>
                            @endif
                            @if ($appointment->status == 'Canceled')
                                <td>
                                    <span
                                        class="badge badge-danger rounded-pill d-inline">{{ $appointment->status }}</span>
                                </td>
                            @endif



                            <td>
                                <a class="btn btn-success btn-sm" href="{{ url('approve', $appointment->id) }}"><i
                                        class="bi bi-check"></i></a>
                            </td>

                            <td>
                                <a class="btn btn-danger" href="{{ url('cancel', $appointment->id) }}"><i
                                        class="bi bi-x"></i></a>
                            </td>



                        </tr>
                        <div class="modal fade" id="myDialog" tabindex="-1" aria-labelledby="myDialogLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myDialogLabel">Message</h5>
                                        <a type="button" class="btn-close " data-bs-dismiss="modal"
                                            aria-label="Close"><i class="bi bi-x-lg text-white"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <p class="fw-normal mb-1">{{ $appointment->message }}</p>

                                    </div>
                                    <div class="modal-footer text-">
                                        <button type="button" class="btn btn-secondary text-white"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>



        </div>

        <!-- container-scroller -->
        @include('dosen.js')

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                // Panggil DataTables
                $('#myTable').DataTable();
            });
        </script>
</body>

</html>
