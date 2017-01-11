<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <center>
        <h1>Tambah Planning Kegiatan</h1>
    </center>
    <form action="<?php echo base_url(). 'crud_home/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>tanggal</td>
                <td><input type="int" name="tanggal"></td>
            </tr>
            <tr>
                <td>acara</td>
                <td><input type="text" name="acara"></td>
            </tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>
