
<table   class="table table-bordered">
    <thead class="thead-light">
			<tr>
		<th scope="row">Category Name</th>
		<th scope="row">Description</th>
    <th scope="row">Short link</th>
		<th scope="row">Actions</th>
    </tr>
		</thead>
		<tbody>
	<?php foreach($category as $c){ ?>
    <tr>

		<td><?php echo $c['category_name']; ?></td>
		<td><?php echo $c['description']; ?></td>
    <td><a href="<?php echo site_url('board/'); ?><?php echo $c['hcode']; ?>" target="_blank"><?php echo $c['hcode']; ?></a></td>
		<td>
            <a href="<?php echo site_url('category/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a>
            <a href="<?php echo site_url('category/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>

<div class="row">
  <div class="col-auto mr-auto"> </div>
  <div class="col-auto"><a href="<?php echo site_url('category/add/') ?>" class="btn btn-success">Add category</a></div>
</div>
