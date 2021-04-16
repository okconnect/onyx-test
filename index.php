<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA==" crossorigin="anonymous"></script>
 <!-- Main css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>json placeholder </title>
</head>
<body>
	<div class ="container">
    <div class ="row">
      <div class ="col-lg-6 mx-auto mt-5">
        <div class ="card">
	<a class="btn btn-primary" id ="btn">Request Posts</a> 
	</div>
</div>
</div><br>
<div class ="row">
	<?php
	include('onyxdb.php');
	?>
<!-- <table class="table">
	<tr>
		<th>userid</th><th>ID</th><th>Title</th><th>Body</th>
	</tr>
	<tbody id ="div">

	</tbody>
</table> -->
</div>
</div>

<script type="text/javascript">
	var btn = document.getElementById("btn").addEventListener("click",getpost);
	
	//var div = document.getElementById("div");
	function getpost(){
	$.getJSON("https://jsonplaceholder.typicode.com/posts/",function(data){ 
		let myArrString = JSON.stringify(data);
	let myArr = JSON.parse(myArrString);
//console.log(myArr);
	$.post('onyxdb.php', {jsPOST: myArr}, function(res, textStatus, xhr) {
        if(res.success){
			  alert("done");
		  }
    });
})
	}
	</script>
</script>

</body>
</html>
