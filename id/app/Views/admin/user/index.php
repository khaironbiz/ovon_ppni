<?php 
$db      = \Config\Database::connect();
//$builder = $db->table('users');
?>

<?php include 'tambah.php'; ?>
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Level</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($user as $user) { ?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $user['user_nama'] ?></td>
			<td><?= $user['email'] ?></td>
			<td><?= $user['user_level'] ?></td>
			<td>
				<a href="<?= base_url('admin/user/edit/' . $user['id_user']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/user/delete/' . $user['id_user']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>