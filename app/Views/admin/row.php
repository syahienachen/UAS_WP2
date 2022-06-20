<tr>
    <td><?= $row->id; ?></td>
    <td><?= $row->username; ?></td>
    <td><?= $row->email; ?></td>
    <td><?= empty($group) ? '' : $group[0]['name']; ?></td>
    <td>
        <a href="<?= base_url(); ?>/admin/changePassword/<?= $row->id;?>" class="btn btn-warning btn-circle btn-sm" title="Ubah Password" >
        <i class="fas fa-key"></i></a>
        <a href="#" class="btn btn-success btn-circle btn-sm btn-change-group" data-id="<?= $row->id;?>" title="Ubah Role">
        <i class="fas fa-tasks"></i></a>
    </td>
</tr>