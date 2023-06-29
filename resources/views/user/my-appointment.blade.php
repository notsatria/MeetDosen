<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>MeetDosen - My Appointment</title>

    <link rel="icon" href="{{ asset('/assets/img/logo-meetdosen.png') }}" type="image/ico" />

    <link rel="stylesheet" href="{{ asset('/assets/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/vendor/owl-carousel/css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/theme.css') }}">

</head>

<body>

    @include('user.navbar')

    <div class="container py-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Dosen Name</th>
                    <th>Department</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Cancel Appointment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataAppointment as $appointment)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">{{ $appointment->dosen }}</p>

                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Software engineer</p>
                            <p class="text-muted mb-0">IT department</p>
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

                        <td class="align-middle" align='center'><a class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah kamu yakin menghapus data ini?')"
                                href="{{ url('cancel-appointment', $appointment->id) }}">Cancel</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <script src="{{ asset('/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('/assets/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('/assets/js/theme.js') }}"></script>

</body>

</html>
