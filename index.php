<?php
include 'connect.php';
	if($conn){
		echo "Ket noi thanh cong!";
	}
	else{
		echo "Ket noi that bai!";
	}
	$sql = "SELECT * FROM diem";
	$stmt = $conn->prepare($sql);
	$query = $stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TEST PDO</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.slim.js"></script>
</head>
<body>
	<button><a href="add_student.php">THÊM SINH VIÊN</a></button>
	<div class="container">
		<table class="table table-inverse">
		<thead>
			<tr>
				<th>Họ tên</th>
				<th>Mã SV</th>
				<th>Điểm</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				if($query){
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //mysqli_fetch_assoc($query)
			?>
			<tr>
				<td><?php echo $row['hoten']?></td>
				<td><?php echo $row['masv']?></td>
				<td><?php echo $row['diem']?></td>
				<span><td><a href="edit.php?ID=<?php echo $row['ID']?>">Sửa</a> <a href="delete.php?ID=<?php echo $row['ID']?>">Xóa</a>
			</tr>
			<?php
				}
				}
				?>
		</tbody>
	</table>
	</div>
</body>
</html>