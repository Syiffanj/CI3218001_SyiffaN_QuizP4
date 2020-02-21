<h2><?php echo $title; ?></h2>  
 
	<?php echo validation_errors(); ?>   
	<?php echo form_open('news/create'); ?>         
	
<form action="news/view">
	<table>         
		<tr>             
			<td><label for="title">Nim</label></td>             
			<td><input type="input" name="nim"></td>         
		</tr>         
		<tr>             
			<td><label for="text">Nama</label></td>             
			<td><input type="input" name="nama"></textarea></td>         
		</tr>
		<tr>             
			<td><label for="text">Judul</label></td>             
			<td><input type="input" name="judul"></textarea></td>         
		</tr>
		<tr>             
			<td><label for="text">Pembingbing</label></td>             
			<td><input type="input" name="pemb"></textarea></td>         
		</tr>
		<tr>             
			<td></td>             
			<td><input type="submit" name="submit" value="Kirim" ></td>         
		</tr>     
	</table>     
	<a href="<?php echo site_url('news/index'); ?>"> Back</a>
</form> 
 