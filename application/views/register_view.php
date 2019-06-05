<?php
$this->load->helper('form');
echo form_open('member/tambah_register');
?>
<table>
	<tr>
		<td>nama </td>
		<td><?php echo form_input('nama','',array('placeholder' => 'nama '));?></td>
	</tr>

	<tr>
		<td>email</td>
		<td><?php echo form_input('email','',array('placeholder' => 'email '));?></td>
	</tr>
	<tr>
		<td>password</td>
		<td><?php echo form_input('password','',array('placeholder' => 'password'));?></td>
	</tr>
	<tr>
			<td><?php 
				echo form_submit('submit','Register');
				?>
			</td>
		</tr>
</table>
<?php
echo form_close();
?>