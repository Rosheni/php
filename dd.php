<html>
<style>
*{
	padding:0%;
	margin:0%;
}
.content-wrapper{
	width:80%;
margin:4% 10% 4% 10%;
	}
.content-wrapper img {
width:50%;
}	
.text-wrapper{
	width:50%;
	position:relative;
	margin-top:-20%;
	}
.text-wrapper p{
	text-align:center;
	color:blue;
	font-size:50px;
}	
</style>

<body>
<div class="content-wrapper">
<?php 
$i=$_POST['path'];
$t=$_POST['te'];
if(!$i && !$t)
	echo "please enter the fields";
else{
echo"<img src=$i>";
}

echo"<div class='text-wrapper'>";
echo"<p>".$t."</p>";?>
</div>
</div>
</body>
</html>
