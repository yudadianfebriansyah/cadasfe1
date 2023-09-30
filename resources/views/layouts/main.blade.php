<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cadaskertajaya</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://karawangkab.go.id/sites/default/files/krw-icon.png" rel="shortcut icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="navbar navbar-light bg-light">
    <div class="container-fluid">

      <h1>
        <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <img src="https://karawangkab.go.id/sites/default/files/krw-icon.png" alt="">
        Cadaskertajaya</a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="d-flex">
        <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="#Pelayanan">Pelayanan Publik</a></li>
          <li><a href="#Contant">Kontak Kami</a></li>
        </ul>
    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Selamat Datang Di<br>Desa Cadaskertajaya</h1>
            <h2>Kecamatan Telagasari, Kabupaten Karawang, Jawa Barat</h2>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="Contant">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h2>Cadaskertajaya</h3>
                            <h3>
                                Desa Cadaskertajaya 41381<br />
                                Indonesia <br /><br />
                                <strong>Phone:</strong> +62 896-3737-9535<br />
                                <strong>Email:</strong> desacadaskertajaya10@gmail.com<br />
                            </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>KKN UNSIKA FASILKOM 2023</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>


<!-- Modal SKU -->
<div class="modal fade" id="ModelSKU" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir SKU</h2>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>

            <!-- Modal Body -->
            <form action="{{ route('sku.create') }}" method="POST">
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    @csrf
                    <div>
                        <h4>Data Pemilik Usaha</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="inputNama" placeholder="Masukan nama"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="inputTtl">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl" id="inputTtl"
                            placeholder="cth: Karawang, 01 Januari 2002" required />
                    </div>
                    <div class="form-group">
                        <label for="inputJeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="inputAlamat"
                            placeholder="Masukan alamat" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAgama">Agama</label>
                        <select class="form-select" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputStatusperkawinan">Status Perkawinan</label>
                        <select class="form-select" name="status_perkawinan">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="inputPekerjaan"
                            placeholder="Cth: Wiraswasta" required />
                    </div>
                    <div class="form-group">
                        <label for="inputKewarganegaraan">Kewarganegaraan</label>
                        <select class="form-select" name="kewarganegaraan">
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control numeric-input" name="nik" id="inputNik"
                            placeholder="Masukan NIK" required />
                    </div>
                    <div>
                        <br>
                        <h4>Data Usaha</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputTahunUsaha">Tahun Awal Usaha</label>
                        <input type="text" class="form-control numeric-input" name="tahun_usaha" id="inputTahunUsaha"
                            placeholder="Masukan tahun awal usaha" required />
                    </div>
                    <div class="form-group">
                        <label for="inputNamausaha">Nama Usaha</label>
                        <input type="text" class="form-control" name="nama_usaha" id="inputNamausaha"
                            placeholder="Masukan nama usaha" required />
                    </div>
                    <div class="form-group">
                        <label for="inputJenisusaha">Jenis Usaha</label>
                        <input type="text" class="form-control" name="jenis_usaha" id="inputJenisusaha"
                            placeholder="Masukan jenis usaha" required />
                    </div>
                    <div class="form-group">
                        <label for="inputLokasi">Lokasi Usaha</label>
                        <input type="text" class="form-control" name="lokasi_usaha" id="inputLokasi"
                            placeholder="Masukan lokasi usaha" required />
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary submitBtn">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal SKU -->

<!-- Modal SKK -->
<div class="modal fade" id="ModelSKK" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir SKK</h2>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div>
                        <h4>Yang bertanda tangan dibawah ini, menerangkan bahwa</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Masukan nama" />
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control" id="inputNik" placeholder="Masukan NIK" />
                    </div>
                    <div class="form-group">
                        <label for="inputUmur">Umur</label>
                        <input type="text" class="form-control" id="inputUmur" placeholder="Masukan umur" />
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="inputPekerjaan" placeholder="Masukan pekerjaan" />
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat KTP</label>
                        <input type="text" class="form-control" id="inputAlamat" placeholder="Masukan alamat" />
                    </div>
                    <div>
                        <br>
                        <h4>Telah meninggal dunia pada</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputHari">Hari</label>
                        <select class="form-select" name="hari" aria-label="Default select example">
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="inputTanggal">Tanggal</label>
                        <input type="text" class="form-control" id="inputTanggal" placeholder="Masukan tanggal" />
                    </div>
                    <div class="form-group">
                        <label for="inputPukul">Pukul</label>
                        <input type="text" class="form-control" id="inputPukul" placeholder="Masukan pukul" />
                    </div>
                    <div class="form-group">
                        <label for="inputTempatkematian">Tempat Kematian</label>
                        <input type="text" class="form-control" id="inputTempatkematian"
                            placeholder="Masukan tempat kematian" />
                    </div>
                    <div class="form-group">
                        <label for="inputPenyebabkematian">Penyebab Kematian</label>
                        <input type="text" class="form-control" id="inputPenyebabkematian"
                            placeholder="Masukan penyebab kematian" />
                    </div>
                    <div>
                        <br>
                        <h4>Surat keterangan ini dibuat berdasarkan Keterangan pelapor</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Masukan nama" />
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control" id="inputNik" placeholder="Masukan NIK" />
                    </div>
                    <div class="form-group">
                        <label for="inputUmur">Umur</label>
                        <input type="text" class="form-control" id="inputUmur" placeholder="Masukan umur" />
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="inputPekerjaan" placeholder="Masukan pekerjaan" />
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamat" placeholder="Masukan alamat" />
                    </div>
                    <div class="form-group">
                        <label for="inputHubungan">Hubungan Pelapor Dengan Yang Meninggal Dunia</label>
                        <input type="text" class="form-control" id="inputHubungan"
                            placeholder="Masukan hubungan pelapor dengan yang meninggal dunia" />
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal SKM -->

<!-- Modal SKDBM -->
<div class="modal fade" id="ModelSKDBM" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir SKDBM</h2>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div>
                        <h4>Yang bertanda tangan dibawah ini, menerangkan bahwa:</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="inputNama" placeholder="Masukan nama"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="inputTtl">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl" id="inputTtl"
                            placeholder="cth: Karawang, 01 Januari 2002" required />
                    </div>
                    <div class="form-group">
                        <label for="inputJeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="inputAlamat"
                            placeholder="Masukan alamat" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAgama">Agama</label>
                        <input type="text" class="form-control" name="agama" id="inputAgama" placeholder="Masukan agama"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="inputStatusperkawinan">Status Perkawinan</label>
                        <select class="form-select" name="status_perkawinan" aria-label="Default select example">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="inputPekerjaan"
                            placeholder="Masukan pekerjaan" required />
                    </div>
                    <div class="form-group">
                        <label for="inputKewarganegaraan">Kewarganegaraan</label>
                        <input type="text" class="form-control" name="kewarganegaraan" id="inputKewarganegaraan"
                            placeholder="Masukan kewarganegaraan" required />
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control numeric-input" name="nik" id="inputNik"
                            placeholder="Masukan NIK" required />
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal SKTM -->

<!-- Modal SK Domisili-->
<div class="modal fade" id="ModelSKdomisili" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir SK Domisili</h2>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div>
                        <h4>Yang bertanda tangan dibawah ini, menerangkan bahwa:</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="inputNama" placeholder="Masukan nama"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="inputTtl">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl" id="inputTtl"
                            placeholder="cth: Karawang, 01 Januari 2002" required />
                    </div>
                    <div class="form-group">
                        <label for="inputJeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="inputAlamat"
                            placeholder="Masukan alamat" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAgama">Agama</label>
                        <input type="text" class="form-control" name="agama" id="inputAgama" placeholder="Masukan agama"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="inputStatusperkawinan">Status Perkawinan</label>
                        <select class="form-select" name="status_perkawinan" aria-label="Default select example">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="inputPekerjaan"
                            placeholder="Masukan pekerjaan" required />
                    </div>
                    <div class="form-group">
                        <label for="inputKewarganegaraan">Kewarganegaraan</label>
                        <input type="text" class="form-control" name="kewarganegaraan" id="inputKewarganegaraan"
                            placeholder="Masukan kewarganegaraan" required />
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control numeric-input" name="nik" id="inputNik"
                            placeholder="Masukan NIK" required />
                    </div>
                    <div class="form-group">
                        <label for="inputStatusperkawinan">Status Kependudukan</label>
                        <select class="form-select" name="status_kependudukan" aria-label="Default select example">
                            <option value="Penduduk Lama">Penduduk Lama</option>
                            <option value="Pendatang">Pendatang</option>
                        </select>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal SK Domisili -->


<!-- membuat inputan max 16 & 4 angka untuk field NIK dan Tahun Usaha -->
<script>
    let inputElementNik = document.getElementById("inputNik");
    let inputElementTahunUsaha = document.getElementById("inputTahunUsaha");


    inputElementNik.addEventListener("input", function () {
        let inputValueNik = inputElementNik.value;

        // Hapus karakter yang tidak valid
        let validValueNik = inputValueNik.replace(/[^0-9]/g, '');

        // Batasi panjang string menjadi 4 karakter
        if (validValueNik.length > 16) {
            validValueNik = validValueNik.slice(0, 16);
        }

        // Setel nilai input dengan string yang sudah valid
        inputElementNik.value = validValueNik;
    });

    inputElementTahunUsaha.addEventListener("input", function () {
        let inputValueTahunUsaha = inputElementTahunUsaha.value;

        // Hapus karakter yang tidak valid
        let validValueTahunUsaha = inputValueTahunUsaha.replace(/[^0-9]/g, '');

        // Batasi panjang string menjadi 4 karakter
        if (validValueTahunUsaha.length > 4) {
            validValueTahunUsaha = validValueTahunUsaha.slice(0, 4);
        }

        // Setel nilai input dengan string yang sudah valid
        inputElementTahunUsaha.value = validValueTahunUsaha;
    });

</script>

<!-- untuk membuat inputan hanya angka -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let inputFields = document.querySelectorAll('.numeric-input');

        inputFields.forEach(function (input) {
            input.addEventListener("input", function () {
                // Hapus karakter selain angka
                this.value = this.value.replace(/\D/g, '');
            });
        });
    });

</script>

<!-- untuk membuat sweetalert dan download word otomatis lalu refresh halaman 2 detik -->
<script>
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Success',
            text: 'Data berhasil ditambahkan, file Word siap untuk diunduh!',
            icon: 'success',
        }).then(() => {
            // Setelah pengguna menekan OK, kirimkan formulir
            this.submit();
            $('#ModelSKU').hide();
            setTimeout(function () {
                window.location.reload();
            }, 2000);

        });

    });

</script>

</html>
