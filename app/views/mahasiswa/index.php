

<div style="padding-left:16px">
    <h3>Daftar Mahasiswa</h3>
    <div>
        <a href="<?= BASEURL; ?>/mahasiswa/tambah">Tambah Data Mahasiswa</a>
    </div><br>
    <table cellpadding="10" border="1" cellspacing="1">
        <?php foreach($data['mhs'] as $mhs) :?>
        <tr>
            <td><?= $mhs['nama']; ?></td>
            <td><a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a></td>
            <td><a href="">Hapus</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>