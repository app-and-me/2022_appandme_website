
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>App & Me</title>
</head>
<link rel="stylesheet" href="css/surpport_list.css">
<body>

	<div class="title">
		<p style="font-weight: bold; font-size: 2.0em; margin-bottom: 1%;">지원현황</p>
		<hr>
		<table class="applicant_list">
			<tr>
				<td>
				<?php
  		include './db_conn.php';
   		$sql = "SELECT name, student_id, five, motive, phone FROM submit";
  		$result = mysqli_query($conn, $sql);
   		if (mysqli_num_rows($result) > 0) {
    	while($row = mysqli_fetch_assoc($result)) {
		?>
					<div class="applicant" style="width: 30%; height : 200px;" >
						<span id="hakbun"><?php echo $row["student_id"];?></span>
						<span id="name"><?php echo $row["name"];?></span>
						<p id="phone"><?php echo $row["phone"];?></p>
						<p id="fiveme"><?php echo $row["five"];?> </p>
						<hr>
						<textarea id="because" disabled><?php echo $row["motive"];?></textarea>
					</div>	
					<?php
		}
   		}else{
    	echo "아직 지원자가 없습니다.";
   		}
   		mysqli_close($conn);
		?>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
