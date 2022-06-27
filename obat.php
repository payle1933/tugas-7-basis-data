<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        body{
            min-height: 95vh;
            background-image: linear-gradient(-20deg,#ff2846 0%, #6944ff 100%);
            background: url(gambar_obat.jpg)no-repeat;
            background-size: cover;
            font-family: quicsand;
        }
        table{
            text-align: center;
        }
        h1{
            color: lightpink; text-align: center; font-size: 40px; font-style: bold; font-family: georgia;
        }
        table,tr,td {
            border: solid 1px lightsteelblue;
            border-collapse: collapse;
            padding: 10px 15px;
            font-family: georgia;
            font-size: 18px;
        }
        thead {
            background-color: #ffb6c1;
        }
    </style>
</head>
<body>
    <h1 style>KLINIK MAULANA HASAN</h1>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>id_obat</td>
                <td>Nama_obat</td>                   
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr style="background-color: aliceblue;">
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['id_obat'] ?></td>
                <td><?php echo $data['Nama_obat'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>