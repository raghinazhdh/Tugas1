<h2>Edit Golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['gol_id']; ?>">
    <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="gol_kode" value="<?php echo $data['row']['gol_kode']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="gol_nama" value="<?php echo $data['row']['gol_nama']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>