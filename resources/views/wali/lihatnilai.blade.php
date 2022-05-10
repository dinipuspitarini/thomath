<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/lihatnilai.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>RPL THOMATH</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img class="Logo" src="/image/thomath.png" alt="">
            <span class="logo_name">THOMATH</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Konsultasi</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Lihat Nilai Anak</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Edit Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Chat</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Lihat Nilai Anak</span>
            </div>
            <div class="main-header">
                <br>
                <div class="form-row" style="margin-top: 270px; margin-left: -1005px;">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" style="width: 50%;">Nama Siswa : {Nama Siswa} </label>
                    </div>
                    <div>
                        <label style="margin-left: -487px; margin-top: 25px; font-size: small;">Kelas : {Kelas Siswa}</label>
                        <br>
                    </div>
                    <center>
                        <div class="section-body" style="width:90%;">
                            <div class="table-responsive">
                                <table id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Nama anak</th>
                                            <th>Material</th>
                                            <th>Judul</th>
                                            <th>Nilai</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nilai as $key => $result)
                                            <tr>
                                                <td>{{ $result->nama }}</td>
                                                <td>{{ $result->material }}</td>
                                                <td>{{ $result->materi }}</td>
                                                <td>{{ $result->nilai }}</td>
                                                <td>{{ $result->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </center>
        </nav>
        <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
            sidebarBtn.onclick = function() {
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                } else
                    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        </script>

</body>

</html>
