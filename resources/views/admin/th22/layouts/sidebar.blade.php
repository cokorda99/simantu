<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="float-start image">
          <img src="../assets/dist/img/avatar5.png" class="rounded-circle" alt="User Image">
        </div>
        <div class="float-start info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <br>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu text-wrap px-1" data-widget="tree">
        <li class="header">KONTRAK KINERJA</li>
        <li><a href="home" class="text-decoration-none"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
        <li><a href="IndeksKepuasanMasyarakat" class="text-decoration-none"><i class="fa fa-book"></i> <span>Indeks Kepuasan Masyarakat atas layanan Balai Besar Veteriner Denpasar yang diberikan</span></a></li>
        <li><a href="PelayananKesehatanHewan" class="text-decoration-none"><i class="fa fa-book"></i> <span>Pelayanan Kesehatan Hewan</span></a></li>
        <li><a href="PengamatanPenyakitHewan" class="text-decoration-none"><i class="fa fa-book"></i> <span>Pengamatan dan Identifikasi Penyakit Hewan</span></a></li>
        {{-- <li><a href="SaranaBidang" class="text-decoration-none"><i class="fa fa-book"></i> <span>Sarana Bidang Kesehatan Hewan</span></a></li> --}}
        <li><a href="TernakRuminansia" class="text-decoration-none"><i class="fa fa-book"></i> <span>Ternak Ruminansia Potong</span></a></li>
        <li><a href="TernakUnggas" class="text-decoration-none"><i class="fa fa-book"></i> <span>Ternak Unggas dan Aneka Ternak</span></a></li>
        <li><a href="KeamananProduk" class="text-decoration-none"><i class="fa fa-book"></i> <span>Keamanan Produk dan Mutu Produk Hewan</span></a></li>
        <li><a href="LayananDukungan" class="text-decoration-none"><i class="fa fa-book"></i><span>Layanan Dukungan Manajemen Internal</span></a></li>
        <li class="header">REALISASI SERAPAN ANGGARAN</li>
        <li><a href="anggaran_PengendalianPenyakit" class="text-decoration-none"><i class="fa fa-circle-o"></i> <span>Pengendalian dan Penanggulangan Penyakit Hewan</span></a></li>
        <li><a href="anggaran_PenyedianBenih" class="text-decoration-none"><i class="fa fa-circle-o"></i> <span>Penyediaan Benih dan Bibit Serta Peningkatanan Produksi Ternak</span></a></li>
        <li><a href="anggaran_KesehatanVeteriner" class="text-decoration-none"><i class="fa fa-circle-o"></i> <span>Peningkatanan Kesehatan Masyarakat Veteriner</span></a></li>
        <li><a href="anggaran_DukunganManajemen" class="text-decoration-none"><i class="fa fa-circle-o"></i> <span>Dukungan Manajemen dan Dukungan Teknis Lainnya Ditjen Peternakan dan Kesehatan Hewan</span></a></li>
        <li class="header">SDM</li>
        <li><a href="sdm_sdm" class="text-decoration-none"><i class="fa fa-circle-o"></i> <span>Jumlah Pegawai</span></a></li>
        <li><a href="sdm_dinasluar" class="text-decoration-none"><i class="fa fa-circle-o"></i> <span>Dinas Luar</span></a></li>
        <li><a href="masukanBalai" class="text-decoration-none"><i class="fa fa-circle-o"></i> <span>Masukan Kepala Balai</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
