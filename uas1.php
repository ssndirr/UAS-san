<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <center>
        <h3>Soal Uas Praktik RPL</h3>
        <img src="s.jfif" alt="" width="120x">
        <form action="huas1.php" method="POST">
        <h3>PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSALAAM</h3>
            

        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                    <div class="card" style="width: 28rem;">
                <div class="card-header">
                Data Pengajihan
                </div>
                <div class="row">
                <div class="col">
                <table>
                <tr>
                <td colspan="2">No <br> <input type="number" name="no" value="" placeholder="No" style="width:100%;" required=""></td>
                </tr>
                <tr>
                <td colspan="2">nama <br> <input type="text" name="nama" value="" placeholder="Nama" style="width:100%;" required=""></td>
                </tr>
                <tr>
                <td colspan="2">Unit Pendidikan <br>
                <select name="unit" id="" value="" style="width:100%;" required="">
                <option value="">Pilih Unit Pendidikan</option>
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMK">SMK</option>
                </select></td>
                </tr>
                <tr>
                <td colspan="2">Tanggal Gaji <br> <input type="date" name="tgl" id="" value="" style="width:100%;" required=""></td>
                </tr>
                <tr>
                <td><h4>GAJI</h4></td>
                <td><h4>POTONGAN</h4></td>
                </tr>
                <tr>
                <td>Jabatan <br> <select name="jabatan" id="" value="" style="width:100%;" required="">
                <option value="">Pilih Jabatan</option>
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakasek">Wakasek</option>
                <option value="Guru">Guru</option>
                <option value="Ob">Ob</option>
                </select></td>
                <td>BPJS <br> <input type="number" name="bpjs" value="" style="width:100%;" required=""></td>
                </tr>
                <tr>
                <td>Lama Kerja <br> <input type="number" name="lamak" value="" placeholder="Lama Kerja" style="width:100%;" required=""></td>
                <td>Pinjaman <br> <input type="number" name="pinjaman" value="" placeholder="Pinjaman" style="width:100%;" required=""></td>
                </tr>
                <tr>
                <td>Status Kerja <br> <select name="status" id="" value="" style="width:100%;" required="">
                <option value="">Pilih Status Kerja</option>
                <option value="Tetap">Tetap</option>
                <option value="Kontrak">Kontrak</option>
                </select></td>
                <td>Cicilan <br> <input type="number" value="" name="tabungan" value="" placeholder="cicilan" style="width:100%;" required=""></td>
                </tr>
                <tr>
                <td></td>
                <td>Lainya <br> <input type="number" name="lainya" value="" placeholder="Lainya" style="width:100%;" required=""></td>
                </tr>
                <tr>
                <td colspan="2" align="center"><br><input type="submit" name="proses" value="simpan"></td>
                </tr>
                </table>
                </div>
                </div>
                </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        </form>
    </center><br><br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
