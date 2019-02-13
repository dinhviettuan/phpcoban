	<style>
		table{
			border-color: blue;
			border:2px solid;
			height: 300px;
			width: 300px;
		}
	</style>
	<?php
		if (isset($_POST['submit']))
		{
   			$sodautien = $_POST["sodautien"];
   			$sothuhai = $_POST["sothuhai"];
   			$sothuba = $_POST["sothuba"];
   			$tinh = $sodautien + ($sodautien * $sothuhai * 0.01);
       	}
 		echo "<table align='center'>
 			<thead>
 				<tr>
 					<th>Máy tính giá trị tương lai</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td><span style='color:blue'>Số tiền đầu tư: $$sodautien</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>Lãi suất hằng năm: $sothuhai %</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>Số năm: $sothuba</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>Giá trị tương lai: $$tinh</span></td>
 				</tr>
 			</tbody>
 		</table>"
?>