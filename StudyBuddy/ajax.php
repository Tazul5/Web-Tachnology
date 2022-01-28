<?php
$connect = mysqli_connect("localhost", "root", "", "studybuddy");
$output = '';
if(isset($_POST["search"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["search"]);
	$query = "
	SELECT * FROM users
	WHERE username LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM users ORDER BY username";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div  class="table  table-striped">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
							<th>firstname</th>
							<th>lastname</th>
							<th>username</th>
							<th>email</th>
							<th>institution</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["firstname"].'</td>
				<td>'.$row["lastname"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["institution"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
