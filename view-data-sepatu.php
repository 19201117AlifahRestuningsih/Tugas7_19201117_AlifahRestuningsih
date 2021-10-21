<html>
<head>
    <title>Tampil Data Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="4">
                    Tampil Data Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="4">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>NoHP</th>
                <th>:</th>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
			<tr>
                <th>Merk</th>
                <th>:</th>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <th>Ukuran</th>
                <th>:</th>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
			<tr>
                <th>Harga</th>
                <th>:</th>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <a href="<?= base_url('sepatu');
?>">Kembali</a>
                </td>

            </tr>
        </table>
    </center>
</body>
</html>
