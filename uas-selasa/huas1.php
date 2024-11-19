<center>
    <fieldset style="width:25%;" 
    style="color:blue;">
<?php
if(isset($_POST['proses'])){
    $no2 = $_POST['no'];
    $nama2 = $_POST['nama'];
    $unit2 = $_POST['unit'];
    $tgl2 = $_POST['tgl'];
    $jabatan2 = $_POST['jabatan'];
    $bpjs2 = $_POST['bpjs'];
    $lamak2 = $_POST['lamak'];
    $pinjaman2 = $_POST['pinjaman'];
    $status2 = $_POST['status'];
    $tabungan2 = $_POST['tabungan'];
    $lainya2 = $_POST['lainya'];


    if ($jabatan2 == "Kepala Sekolah") {
        $gaji_karya = 10000000;
    }elseif($jabatan2 == "Wakasek"){
        $gaji_karya = 7000000;
    }elseif($jabatan2 == "Guru"){
        $gaji_karya = 5000000;
    }elseif($jabatan2 == "Ob"){
        $gaji_karya = 2500000;
    }
    

    if ($status2 === "Tetap"){
        $bonus = 1000000;
    }elseif($status2 === "Kontrak"){
        $bonus = 0;
    }

    $kotor = $bpjs2 + $pinjaman2 + $tabungan2 + $lainya2 ;

    // $totalp = $bpjs2 + $pinjaman2 + $tabungan2 + $lainya2 ;

    $bersih = $gaji_karya + $bonus - $kotor;

    echo "    <section>
        <div class='container'>
            <div class='row'>
                <div class='col'>
                <div class='card-header'>
                $nama2
                </div>
        <table style='color:blue;'>
        <tr>
            <td align='center' colspan='2'><h3>STRUK GAJI</h3></td>
        </tr>
        <tr>
            <td>No</td>
            <td>: $no2</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: $nama2</td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>: $unit2</td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>: $tgl2</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: $jabatan2</td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>: $gaji_karya</td>
        </tr>  
        <tr>
            <td>Lama Kerja</td>
            <td>: $lamak2</td>
        </tr>   
        <tr>
            <td>status kerja</td>
            <td>: $status2</td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>: $bonus</td>
        </tr>
        <tr>
            <td>BPJS</td>
            <td>: $bpjs2</td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>: $pinjaman2</td>
        </tr>
        <tr>
            <td>Cicilan</td>
            <td>: $tabungan2</td>
        </tr>
        <tr>
            <td>Lainya</td>
            <td>: $lainya2</td>
        </tr>
        <tr>
            <td>Gaji Bersih</td>
            <td>: $bersih</td>
        </tr>
        
        </table>
                </div>
            </div>
        </div>
    </section>";

}
?>
</fieldset>
</center>
