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
			$motasanpham = $_POST["motasanpham"];
			$gianiemyet = $_POST["gianiemyet"];
			$tilechieckhau = $_POST["tilechieckhau"];
   			$luongchieckhau = $_POST["luongchieckhau"];
   			$giasauchieckhau = $_POST["giasauchieckhau"];
   			$tinh = $luongchieckhau * $tilechieckhau * 0.1;
       	}
 		echo "<table align='center'>
 			<thead>
 				<tr>
 					<th>Máy tính giá trị tương lai</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td><span style='color:blue'>Mô tả sản phẩm: $$motasanpham</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>Giá niêm yết của sản phẩm: $gianiemyet %</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>tỷ lệ chiếc khấu: $tilechieckhau</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>Lượng chiếc khấu: $$luongchieckhau</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>Giá sau khi được chiếc khấu: $$giasauchieckhau</span></td>
 				</tr>
 			</tbody>
 		</table>"
?>