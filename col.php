<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>无标题文档</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="css/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="css/green.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="css/custom.min.css" rel="stylesheet">
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "test";

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}

$sql = "SELECT * FROM xueyuan";
$result = $conn->query( $sql );

$conn->close();
?>

<body>

	<div class="containe">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="success">
					<th>序号</th>
					<th>ActionID</th>
					<th>Category</th>
					<th>SubProcess Name</th>
					<th>Description</th>
					<th>Do Action</th>
				</tr>
			</thead>
			<tbody>

				<?php

				if ( $result->num_rows > 0 ) {

					// output data of each row
					while ( $row = $result->fetch_assoc() ) {
						echo "<tr>";
						echo "<td>" . $row[ 'title' ] . "</td>";
						echo "<td>" . $row[ 'content' ] . "</td>";
						echo '<td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i><font><font class=""> 编辑 </font></font></a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i><font><font> 删除 </font></font></a></td>';
						echo "</tr>";
					}
					
				}
				?>

			</tbody>
		</table>
	</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- NProgress -->
	<script src="js/nprogress.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="js/bootstrap-progressbar.min.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="js/custom.min.js"></script>

</body>

</html>