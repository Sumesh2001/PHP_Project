<Html>
	<head>
		<style>
			.f1
			{
				background:black;
				color:white;
				opacity:0.8;
				position:relative;
				width:50%;
				border-radius:20px;
				text-shadow: 0px 1px blue;
				height:50%;
				margin-top:18%
			}
			h1{
				color:white;
				position:relative;
				border-radius:20px;
				text-shadow: 0px 1px blue;
				margin-top:2%
			}
			input[type=button]
			{
				color:white;
				position:relative;
				border-radius:20px;
				text-shadow: 0px 1px blue;
				margin-top:2%;
				background:blue;
				font-size:20px;
				border:none;
				width:30%;
				height:30px;
				margin-top:15px;
			}
			
		</style>
		<?php
			$con=new mysqli("localhost","root","","stud");
			$query2="select * from student where (staff1, staff2, staff3 )= (1,1,1)";
			$result2=$con -> query($query2);
			$tot=0;
			while($row2=mysqli_fetch_assoc($result2))
			{
				$tot++;
			}
		
		?>
	</head>
	<body background="bg.jpg" style="background-size:cover">
		
		<center>
		
		<div class="f1">
		<br>
		<marquee>Number of Students given all feedback are <?php echo $tot?></marquee>
		<h1>FeedBack</h1>
		
		<br>
			
			<a href="data.php"><input type="button"  value=" FeedBack " target="self"></a><br>
			<a href="all.php"><input type="button"  value=" Status "></a>
		</div>
		</center>
	</body>
</html>