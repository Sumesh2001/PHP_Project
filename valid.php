<body background="bg.jpg" style="background-size:cover">
<?php
	$con=new mysqli("localhost","root","","stud");
	$query="select * from student";
	
	
	$result=$con -> query($query);
	if(($_GET['rno']!="")&&($_GET['name']!=""))
	{
		$RollNo1=$_GET['rno'];
		$Name1=$_GET['name'];
		
		$valid=0;
		while($row=mysqli_fetch_assoc($result))
		{
			//echo "<br>Roll No : ".$row["rollno"];
			$rno=$row["rollno"];
			$name=$row["name"];
			$att=$row["Attendance"];
			$feedback=$row["feedback"];
			$staff1=$row["staff1"];
			$staff2=$row["staff2"];
			$staff3=$row["staff3"];
			$tr=$_GET['teacher'];
			if(($RollNo1==$rno)&&($Name1==$name))
			{		
				if($att<75)
				{
					include_once('data.php');
					$valid=2;
					?>
					
					<script>
						alert("Your are not eligible for feedback ");
					</script>
					<?php 
				}	
				else
				{
					
					$q1=$_GET['1'];
					$q2=$_GET['2'];
					$q3=$_GET['3'];
					$q4=$_GET['4'];
					$q5=$_GET['feedback'];
					
					$valid=1;
					$vr=$row["rollno"];
					$vn=$row["name"];
					$vc=$row["class"];
					$va=$row["Attendance"];
					$tr=$_GET['teacher'];
					
					//echo $tr;
					//$query2="update student set feedback = 1 where rollno=$vr";
					//$con->query($query2);
					
					if($tr=="D.D Survase")
					{
						
						if($staff1==1)
						{
							?><script>alert("You have already given D.D Survase's feedback");</script>
							<?php
							include_once('data.php');
							$valid=3;
						}
						else
						{
							$query2="update student set staff1 = 1 where rollno=$vr";
						
						
							$fquery1="insert into feedback1(teacher,question,answer) values ('$tr','1','$q1')";
							$fquery2="insert into feedback1(teacher,question,answer) values ('$tr','2','$q2')";
							$fquery3="insert into feedback1(teacher,question,answer) values ('$tr','3','$q3')";
							$fquery4="insert into feedback1(teacher,question,answer) values ('$tr','4','$q4')";
							$fquery5="insert into feedback1(teacher,question,answer) values ('$tr','Feedback','$q5')";
						
							$con->query($query2);
							$con->query($fquery1);
							$con->query($fquery2);
							$con->query($fquery3);
							$con->query($fquery4);
							$con->query($fquery5);
						
						}
					}
					if($tr=="D.B Sisode")
					{
						if($staff2==1)
						{
							?><script>alert("You have already given D.B Sisode's feedback");</script>
							<?php
							include_once('data.php');
							$valid=4;
						}
						else
						{
							$query2="update student set staff2 = 1 where rollno=$vr";
						
							$fquery1="insert into feedback1(teacher,question,answer) values ('$tr','1','$q1')";
							$fquery2="insert into feedback1(teacher,question,answer) values ('$tr','2','$q2')";
							$fquery3="insert into feedback1(teacher,question,answer) values ('$tr','3','$q3')";
							$fquery4="insert into feedback1(teacher,question,answer) values ('$tr','4','$q4')";
							$fquery5="insert into feedback1(teacher,question,answer) values ('$tr','Feedback','$q5')";
						
							$con->query($query2);
							$con->query($fquery1);
							$con->query($fquery2);
							$con->query($fquery3);
							$con->query($fquery4);
							$con->query($fquery5);
						}
					}
					if($tr=="G.P Mohole")
					{
						if($staff3==1)
						{
							?><script>alert("You have already given G.P Mohole's feedback");</script>
							<?php
							include_once('data.php');
							$valid=5;
						}
						else
						{
							$query2="update student set staff3 = 1 where rollno=$vr";
							$fquery1="insert into feedback1(teacher,question,answer) values ('$tr','1','$q1')";
							$fquery2="insert into feedback1(teacher,question,answer) values ('$tr','2','$q2')";
							$fquery3="insert into feedback1(teacher,question,answer) values ('$tr','3','$q3')";
							$fquery4="insert into feedback1(teacher,question,answer) values ('$tr','4','$q4')";
							$fquery5="insert into feedback1(teacher,question,answer) values ('$tr','Feedback','$q5')";
						
							$con->query($query2);
							$con->query($fquery1);
							$con->query($fquery2);
							$con->query($fquery3);
							$con->query($fquery4);
							$con->query($fquery5);
						}
					}
					
				}
			}
			
		}
		
		if($valid==1)
		{
			?>
			<h2><div style="position:absolute;top:40%;left:33%;color:white;font-family:'Open Sans' ,'san-serif';font-weight:bold;"><?php 
			echo ucwords("Thanks $vn for giving your valuable feedback");
			?><br><center><button onclick="window.history.back(-2);" style="background:blue;position:relative;width:100px;padding:2%;border-radius:20px;color:white;border:none;margin:10px;font-family:'Open Sans' ,'san-serif';font-weight:bold;font-size:16px">HOME</Button></center></div></h2>
			<?php
			
		}
		else if($valid==0)
		{
			 ?><script>alert("Invalid Data Student");</script>;
			 <?php
			include_once('data.php');
			
		}
		
	}
	else
	{
		include_once('data.php');
	}
		
		?>
</body>