<h2>Golongan</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn">Input Golongan</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>ID</th>
        <th>KODE</th>
        <th>CREATED AT</th>
        <th>UPDATE AT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php $no = 1;
    foreach ($data['rows'] as $row) { ?>
        <tr>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $row['gol_nama']; ?>
            </td>
            <td>
                <?php echo $row['gol_id']; ?>
            </td>
            <td>
                <?php echo $row['gol_kode']; ?>
            </td>
            <td>
                <?php echo $row['created_at']; ?>
            </td>
            <td>
                <?php echo $row['updated_at']; ?>
            </td>
            <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a></td>
            <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">delete</a></td>
        </tr>
        <?php $no++;
    } ?>

</table>