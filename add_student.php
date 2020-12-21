<?php
include('connect.php');
if(!empty($_POST['submit'])){
	if(isset($_POST['hoten'])&&isset($_POST['masv'])&&isset($_POST['diem'])){
		$hoten = $_POST['hoten'];
		$masv = $_POST['masv'];
		$diem = $_POST['diem'];
		$sql = "INSERT INTO diem (hoten,masv,diem) VALUES('$hoten','$masv','$diem')"; 
		$stmt = $conn->prepare($sql);
		$query = $stmt->execute();
		if($query){
			header("location:index.php");
		}
		else{
			echo "Them that bai, vui long thu lai!";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>THÊM SINH VIÊN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.slim.js"></script>
</head>
<body>
	<div class="container">
		<form method="post">
			<table class="table table-inverse">
				<tbody>
					<tr>
						<td>Nhập họ tên</td>
						<td><input type="text" name="hoten"></td>
					</tr>

					<tr>
						<td>Nhập mã sinh viên</td>
						<td><input type="text" name="masv"></td>
					</tr>

					<tr>
						<td>Nhập điểm</td>
						<td><input type="text" name="diem"></td>
					</tr>
						
				</tbody>
			</table>
			<button type="submit" name="submit" value="submit">LƯU</button>
		</form>
		
	</div>
</body>
</html>