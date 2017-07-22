<html>
<head>
<?php
$comments = array();
$user_name = "root";
$password = "";
$database = "praktikum";
$host_name = "localhost"; 
 
$con=mysqli_connect($host_name, $user_name, $password,$database);
$result = mysqli_query($con,"SELECT * FROM comments ORDER BY id ASC");

while($row = mysqli_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}
foreach($comments as $c){
	echo $c->markup();
}
?>
	
</head>
<body>
<div id="addCommentContainer">
	<p>Add a Comment</p>
	<form id="addCommentForm" method="post" action="">
    	<div>
        	<label for="name">Your Name</label>
        	<input type="text" name="name" id="name" />

            <label for="email">Your Email</label>
            <input type="text" name="email" id="email" />

            <label for="url">Website (not required)</label>
            <input type="text" name="url" id="url" />

            <label for="body">Comment Body</label>
            <textarea name="body" id="body" cols="20" rows="5"></textarea>

            <input type="submit" id="submit" value="Submit" />
        </div>
    </form>
</div>
</body>
</html>