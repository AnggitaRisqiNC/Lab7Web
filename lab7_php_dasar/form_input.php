<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="col-sm-10">
    <h2>Form</h2>
    <form method="post" >
        <label>Nama: </label><br>
        <input type="text" name="nama" class="form-control Default input mx-auto my-auto" aria-label="Default select example" placeholder="Nama"><br>
        <label>Tanggal Lahir: </label><br>
        <input type="date" name="tgl" class="form-control Default input mx-auto my-auto mb-3" aria-label="Default select example" placeholder="Tanggal Lahir"><br>
        <label>Pekerjaan: </label><br>
        <select name='pekerjaan' class="form-control Default input mx-auto my-auto mb-3" aria-label="Default select example">
            <option selected>Pilih Pekerjaan</option>
            <option value="Software Engineer">Software Engineer</option>
            <option value="Data Scientist">Data Scientist</option>
            <option value="Cyber Security Analyst">Cyber Security Analyst</option>
            <option value="UI/UX Designer">UI/UX Designer</option>
            <option value="IT Project Manager">IT Project Manager</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Android Developer">Android Developer</option>
        </select><br><br>
        <button type="submit" class="btn btn-primary btn-sm mx-auto my-auto">Kirim</button>
    </form><br>

    <h2>Hasil</h2>
    <?php
        # Nama
        echo 'Nama: ' . $_POST['nama'];

        # Merubah Tanggal Lahir menjadi Umur
        $tgl = $_POST['tgl'];

        $lahir = new DateTime($tgl);
        $hari_ini = new DateTime();

        $diff = $hari_ini->diff($lahir);
        echo "<br> Umur: ". $diff->y ." Tahun";

        # Memanggil Pekerjaan
        echo "<br> Pekerjaan: ". $_POST['pekerjaan'];

        # Gaji
        $pekerjaan = $_POST['pekerjaan'];

        if($pekerjaan == "Software Engineer"){
            echo '<br> Gaji: Rp. 20.000.000';
        }elseif($pekerjaan == "Data Scientist"){
            echo '<br> Gaji: Rp. 30.000.000';
        }elseif($pekerjaan == "Cyber Security Analyst"){
            echo '<br> Gaji: Rp. 35.000.000';
        }elseif($pekerjaan == "UI/UX Designer"){
            echo '<br> Gaji: Rp. 40.000.000';
        }elseif($pekerjaan == "IT Project Manager"){
            echo '<br> Gaji: Rp. 45.000.000';
        }elseif($pekerjaan == "Web Developer"){
            echo '<br> Gaji: Rp. 25.000.000';
        }elseif($pekerjaan == "Android Developer"){
            echo '<br> Gaji: Rp. 25.000.000';
        }
    ?>
  </body>
</html>
