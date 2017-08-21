<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'forum';

	$conn = mysqli_connect($server,$username,$password,$db);
		if (!$conn){
			die('Database connection error!'.mysqli_connect_error());
		}



$sql = "SELECT * FROM news";

$res2 = mysqli_query($conn,$sql);

if($res2){
while($row = mysqli_fetch_row($res2)){
	echo "<div class='midcontent'>
				<div class='newspost'>
					<div><img src='./images/user1.png' id='author'></div>
					<div id='status'><p>$row[1]</p><p>$row[2]</p><p>$row[3]</p></div>
					<div id='newscontent'>
						<p>$row[4]</p>
					</div>
				</div>
		</div>";


}
}


?>