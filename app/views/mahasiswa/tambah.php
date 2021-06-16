

<div style="padding-left:16px">
    <h3>Tambah Daftar Mahasiswa</h3>
    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
    <table cellpadding="10" border="1" cellspacing="1">
        <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" required></td>
        </tr>
        <tr>
            <td><label for="nim">Nim</label></td>
            <td>:</td>
            <td><input type="number" name="nim" id="nim"></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td>:</td>
            <td>
            <select name="jurusan" id="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Pangan">Teknik Pangan</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
            </td>
        </tr>
        </tr>
                <td></td>
                <td></td>
                <td>
                <button><a href="<?= BASEURL; ?>/mahasiswa">Kembali</a></button> | 
                <button type="submit" name="submit" >Tambah</button>
                </td>
            </tr>
    </table>
    </form>
</div>