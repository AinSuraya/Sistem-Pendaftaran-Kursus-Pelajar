<h1>Daftar Kursus</h1>

	<form method="post" action="daftar-simpan.php"> 
		<table border="0">
        <center>
        <tr>
			<th>Kursus</th>
			<?php
				$sql = "SELECT * FROM kursus ORDER BY idkursus";
				$result = $conn->query($sql);
				echo $conn->error;
        	?>
			<td><select name="idkursus" id="idkursus">
			<?php
				while ($row = $result->fetch_object()) {
			?>
			<option value="<?php echo $row->idkursus;?>"><?php echo $row->kodkursus.' '.$row->namakursus.' '.'-'.' '.$row->jamkredit; ?></option>
			<?php
				}
			?>
			</select></td>
    	</tr>
		<tr>
			<th>Sesi</th>
			<td><input name="sesi"></td>
		</tr>
        <tr>
			<td colspan="2" align="center">
			<button type="submit">HANTAR</button>
			</td>
		</tr>
		</center>
	</table>
</form>