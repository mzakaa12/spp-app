<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'sppsekolah');
$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_tagihan");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$nomor = $halaman_awal + 1;



if (isset($_POST['submit'])) {
  $bln = $_POST['bulan'];
  $siswa = mysqli_query($koneksi, "SELECT * FROM tb_tagihan WHERE bulan = '$bln'");
} else {
  # code...
  $siswa = mysqli_query($koneksi, "SELECT * FROM tb_tagihan LIMIT $halaman_awal, $batas");
}

// cari
if (isset($_POST['go'])) {
  $cari = $_POST['cari'];
  $siswa = mysqli_query($koneksi, "SELECT * FROM tb_tagihan WHERE nama LIKE '%" . $cari . "%' OR kelas LIKE '%" . $cari . "%' OR  bulan LIKE '%" . $cari . "%'");
} else {
  $siswa = mysqli_query($koneksi, "SELECT * FROM tb_tagihan LIMIT $halaman_awal, $batas");
}
// date_default_timezone_set("Asia/Jakarta");

// $bulan = date("m");


// cari





foreach ($siswa as $pro) :
?>




  <tr>
    <td><?= $no++;  ?></td>
    <td><?= $pro['nis']; ?></td>
    <td><?= $pro['nama']; ?></td>
    <td><?= $pro['kelas']; ?></td>
    <td><?= $pro['prodi']; ?></td>
    <td>

      <?php
      if ($pro['bulan'] == 01) {
        echo '<p style="color: black;">Januari</p>';
      } else if ($pro['bulan'] == 02) {
        echo '<p style="color: black;">Febuari</p>';
      } elseif ($pro['bulan'] == 03) {
        echo '<p style="color: black;">Maret</p>';
      } elseif ($pro['bulan'] == 04) {
        echo '<p style="color: black;">April</p>';
      } elseif ($pro['bulan'] == 05) {
        echo '<p style="color: black;">Mei</p>';
      } elseif ($pro['bulan'] == 06) {
        echo '<p style="color: black;">Juni</p>';
      } elseif ($pro['bulan'] == 07) {
        echo '<p style="color: black;">Juli</p>';
      } elseif ($pro['bulan'] == '08') {
        echo '<p style="color: black;">Agustus</p>';
      } elseif ($pro['bulan'] == '09') {
        echo '<p style="color: black;">September</p>';
      } elseif ($pro['bulan'] == 10) {
        echo '<p style="color: black;">Oktober</p>';
      } elseif ($pro['bulan'] == 11) {
        echo '<p style="color: black;">November</p>';
      } elseif ($pro['bulan'] == 12) {
        echo '<p style="color: black;">Desember</p>';
      }
      ?>
    </td>
    <td>
      <?php
      if ($pro['keterangan'] == "lunas") {
        echo '<span class="badge badge-pill badge-success">Lunas</span>';
      } elseif ($pro['keterangan'] == "belum lunas") {
        echo '<span class="badge badge-pill badge-danger">Belum Lunas</span>';
      }

      ?>

    </td>



  </tr>
<?php endforeach; ?>