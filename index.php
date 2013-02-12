<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>CPSC Information</title>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>CPSC Information</span></h1>
			<h2><span>Bringing you the latest and greatest</span></h2>			
		</div>


	</div>

	<div id="supportingText">
			<div id="explanation">
			<h3><span>Goals</span></h3>
			<p class="p1"><span>To bring you all the latest information on the CPSC department, from class cancelations to new equipment arrivals, it will all be posted here.</span></p>
		</div>
			
			<div id="explanation">
			<h3><span>Posts</span></h3>
			
					
<?php
	include('dbconnect.php');
	$query = "SELECT firstname,topicName,post FROM simpleBlog";
    $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
    while($row = mysqli_fetch_array($result)) {
  		$firstname = $row['firstname'];
  		$topicName = $row['topicName'];
		$post = $row['post'];
		
  

		echo "<br><b>Topic:</b> $topicName";
		echo "<br><b>Post:</b> $post";
		echo "<br> -$firstname";
		echo "<br>";
		
		
		
  //	echo  "<tr><td><b>Topic:</b> $topicName</td></tr>
	//      <tr><td><b>Post:</b> $post</td></tr>
	//	  <tr><td><b>By:</b> -$firstname</td></tr>
	//	  <tr></tr>
	//	  <tr></tr>
	//	  <tr></tr>\n";
	
		  
  }                 
                         
                         
                         
    mysqli_close($db);

?>

			
		</div>
		

		<div id="footer">
Copyright © 2013 Awesome		</div>
	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="post.php">Post</a></li>
					
				</ul>
			</div>

		
		</div>
	</div>
</div>
<!-- Designed by DreamTemplate. Please leave link unmodified. -->

</body>
</html>
