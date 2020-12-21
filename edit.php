<?php
include('connect.php');
$ID = $_GET['ID'];
$sql1 = "SELECT * FROM diem WHERE ID = '$ID'";
$stmt = $conn->prepare($sql1);
$query = $stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if(!empty($_POST['submit'])){
	if(isset($_POST['hoten'])&&isset($_POST['masv'])&&isset($_POST['diem'])){
		$hoten = $_POST['hoten'];
		$masv = $_POST['masv'];
		$diem = $_POST['diem'];
		$sql = "UPDATE diem SET hoten = '$hoten',masv = '$masv',diem = '$diem' WHERE ID = '$ID'";
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
	<title>SỬA THÔNG TIN SINH VIÊN</title>
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
						<td><input type="text" name="hoten" value="<?php echo $result['hoten']?>"></td>
					</tr>

					<tr>
						<td>Nhập mã sinh viên</td>
						<td><input type="text" name="masv" value="<?php echo $result['masv']?>"></td>
					</tr>

					<tr>
						<td>Nhập điểm</td>
						<td><input type="text" name="diem" value="<?php echo $result['diem']?>"></td>
					</tr>
						
				</tbody>
			</table>
			<button type="submit" name="submit" value="submit">LƯU</button>
		</form>
		
	</div>
</body>
</html>