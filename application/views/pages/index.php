
<div class="container">
	<div class="row">
		<a type="submit" class="btn btn-success btn-lg btn-block" href="<?php echo base_url('insert') ?>">Insert New Record</a>
		<br>
		<span style="color: #449d44;font-size: 19px;"><?php echo $this->session->flashdata('success'); ?></span>
		<table class="table table-hover table-responsive">
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>First Name</th>
		            <th>Last Name</th>
		            <th>Edit</th>
		            <th>Delete</th>
		        </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($fetch->result() as $employe) { ?>
			        <tr id="d1">
			            <td><?php echo $employe->eid ?></td>
			            <td id="f1"><?php echo $employe->first_name ?></td>
			            <td id="l1"><?php echo $employe->last_name ?></td>
			            <td><a class="update btn btn-warning btn-sm" href="<?php echo base_url('pages/upd').'/'.$employe->id ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
			            <td><a class="delete btn btn-danger btn-sm" href="<?php echo base_url('pages/del').'/'.$employe->id ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
			        </tr>
			    <?php } ?>
		    </tbody>
		</table>
	</div>
</div>