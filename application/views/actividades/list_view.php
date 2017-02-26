<?php $this->load->view('masterpage/head.php'); ?>
<?php $this->load->view('masterpage/nav.php'); ?>

<?php echo form_open('Actividades/record'); ?>

<div class="container">
	<table class="table">
		<thead>
			<tr>
				<td>
					Titulo
				</td>
			
				<td>
					Descripcion
				</td>
			</tr>	
		</thead>
		<tbody>
<?php foreach($actividades as $row):  ?>	
			<tr>
				<td>
					<?php echo $row->titulo; ?>
				</td>
			
				<td>
					<?php echo $row->descripcion; ?>
				</td>
			</tr>	

<?php endforeach; ?>
		</tbody>

	</table>

</div>

<?php $this->load->view('masterpage/footer.php'); ?>