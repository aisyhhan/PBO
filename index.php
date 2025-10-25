<?php
if (isset($_POST['btn_submit'])) {
    $nama       = $_POST['nama_lengkap'];
    $nis        = $_POST['nis'];
    $jenis_kel  = $_POST['jenis_kelamin'];
    $alamat     = $_POST['alamat'];
    $agama      = $_POST['agama'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Biodata Sederhana</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background: #e7f3ff;
            padding: 20px;
        }
        .container{
            width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        input, textarea, select{
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
        }
        button{
            background: #007bff;
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            width: 100%;
        }
        .hasil{
            margin-top: 20px;
            background: #d9f7d9;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>FORM INPUT BIODATA</h2>
    <form method="POST">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" required>

        <label>NIS:</label>
        <input type="number" name="nis" required>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
        <br><br>

        <label>Alamat:</label>
        <textarea name="alamat" rows="3" required></textarea>

        <label>Agama:</label>
        <select name="agama" required>
            <option>-- Pilih Agama --</option>
            <option>Islam</option>
            <option>Kristen</option>
            <option>Katolik</option>
            <option>Hindu</option>
            <option>Buddha</option>
            <option>Konghucu</option>
        </select>

        <button type="submit" name="btn_submit">Kirim dan Tampilkan Biodata</button>
    </form>

    <?php if (isset($_POST['btn_submit'])) { ?>
        <div class="hasil">
            <h3>HASIL BIODATA ANDA</h3>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>NIS:</strong> <?php echo $nis; ?></p>
            <p><strong>Jenis Kelamin:</strong> <?php echo $jenis_kel; ?></p>
            <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
            <p><strong>Agama:</strong> <?php echo $agama; ?></p>
        </div>
    <?php } ?>

</div>

</body>
</html