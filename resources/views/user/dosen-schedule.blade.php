<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="icon" href="../assets/img/logo-meetdosen.png" type="image/ico" />

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>

<body>

    @include('user.navbar')

    <div class="container my-5">

        <table id="myTable" class="table table-striped table-bordered align-middle bg-white">
            <thead>
                <tr>
                    <th>Dosen</th>
                    <th>Mahasiswa</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointmentData as $appointment)
                    <tr>
                        <td>
                            <p class="fw-normal mb-1">{{ $appointment->dosen }}</p>

                        </td>
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
                            <p class="fw-normal mb-1">{{ $appointment->date }}</p>

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
                                <span class="badge badge-danger rounded-pill d-inline">{{ $appointment->status }}</span>
                            </td>
                        @endif
                @endforeach

                <script src="../assets/js/jquery-3.5.1.min.js"></script>

                <script src="../assets/js/bootstrap.bundle.min.js"></script>

                <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

                <script src="../assets/vendor/wow/wow.min.js"></script>

                <script src="../assets/js/theme.js"></script>

</body>

</html>
