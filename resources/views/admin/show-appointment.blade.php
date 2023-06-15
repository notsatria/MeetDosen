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
                                    <p class="fw-normal mb-1">{{ $appointment->message }}</p>

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
                                    <a class="btn btn-success" href="{{ url('approve', $appointment->id) }}">Approve</a>
                                </td>

                                <td>
                                    <a class="btn btn-danger" href="{{ url('cancel', $appointment->id) }}">Cancel</a>
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
