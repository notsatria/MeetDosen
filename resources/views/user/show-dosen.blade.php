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

    <div class="container py-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Foto</th>
                    <th>Dosen Name</th>
                    <th>No Telp</th>
                    <th>NIDN</th>
                    <th>Department</th>
                    <th>Jadwal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataDosen as $dosen)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="foto-dosen/{{ $dosen->photo }}" alt=""
                                    style="width: 45px; height: 45px" class="rounded-circle" />
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $dosen->nama }}</p>

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
                            <a href="{{ url('dosen-schedule', $dosen->nama) }}" class="btn btn-info"><i
                                    class="bi bi-calendar-date"></i></a>

                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
