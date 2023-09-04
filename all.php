<html>
	<head>
		<link rel="stylesheet" href="circle.css">
		<?php 
			$con=new mysqli("localhost","root","","stud");
			$query="select * from feedback1";
			$result=$con -> query($query);
			$totgs=0;$totas=0;$totbs=0;
			$totgm=0;$totam=0;$totbm=0;
			$totgd=0;$totad=0;$totbd=0;
			$sum=0;
			$att=0;
			
			$query2="select * from student where Attendance > 75.00";
			$result2=$con -> query($query2);
			while($row2=mysqli_fetch_assoc($result2))
			{
				$att++;
			}
			$per=$att*4;
			while($row=mysqli_fetch_assoc($result))
			{
				$tr=$row["teacher"];
				$qu=$row["question"];
				$ans=$row["answer"];
				
				//SSDHOOT : Good
				if(($ans == "Good")&&($tr == "D.D Survase"))
				{
					$totgs ++;
				}
				//SSDHOOT : Average
				if(($ans == "Average")&&($tr == "D.D Survase"))
				{
					$totas ++;
				}
				//SSDHOOT : Excellent
				if(($ans == "Excellent")&&($tr == "D.D Survase"))
				{
					$totbs ++;
				}
				$sum++;
				
				
				
				//MSKARANDE : Good
				if(($ans == "Good")&&($tr == "D.B Sisode"))
				{
					$totgm ++;
				}
				//MSKARANDE : Average
				if(($ans == "Average")&&($tr == "D.B Sisode"))
				{
					$totam ++;
				}
				//MSKARANDE : Excellent
				if(($ans == "Excellent")&&($tr == "D.B Sisode"))
				{
					$totbm ++;
				}
				
				
				
				
				//DDPAWAR : Good
				if(($ans == "Good")&&($tr == "G.P Mohole"))
				{
					$totgd ++;
				}
				//DDPAWAR : Average
				if(($ans == "Average")&&($tr == "G.P Mohole"))
				{
					$totad ++;
				}
				//DDPAWAR : Excellent
				if(($ans == "Excellent")&&($tr == "G.P Mohole"))
				{
					$totbd ++;
				}
				
				
			}
			$avggs= $totgs * 100;$avgas= $totas * 100;$avgbs= $totbs * 100;
			$avggm= $totgm * 100;$avgam= $totam * 100;$avgbm= $totbm * 100;
			$avggd= $totgd * 100;$avgad= $totad * 100;$avgbd= $totbd * 100;
		?>
		
		<script>
		function show()
		{
			var cn1="c100 p";
			
			var txt=document.getElementById('sg').value;
			document.getElementById('text').innerHTML = txt+'%'+"\n";
			document.getElementById('per1').className= cn1+txt;
			
			var txt=document.getElementById('sa').value;
			document.getElementById('text2').innerHTML = txt+'%'+"\n";
			document.getElementById('per2').className= cn1+txt;
			
			var txt=document.getElementById('sb').value;
			document.getElementById('text3').innerHTML = txt+'%'+"\n";
			document.getElementById('per3').className= cn1+txt;
			
			//mskarande
			
			var txt=document.getElementById('mg').value;
			document.getElementById('text1m').innerHTML = txt+'%'+"\n";
			document.getElementById('per1m').className= cn1+txt;
			
			var txt=document.getElementById('ma').value;
			document.getElementById('text2m').innerHTML = txt+'%'+"\n";
			document.getElementById('per2m').className= cn1+txt;
			
			var txt=document.getElementById('mb').value;
			document.getElementById('text3m').innerHTML = txt+'%'+"\n";
			document.getElementById('per3m').className= cn1+txt;
			
			//DDPAWAR
			
			var txt=document.getElementById('dg').value;
			document.getElementById('text1d').innerHTML = txt+'%'+"\n";
			document.getElementById('per1d').className= cn1+txt;
			
			var txt=document.getElementById('da').value;
			document.getElementById('text2d').innerHTML = txt+'%'+"\n";
			document.getElementById('per2d').className= cn1+txt;
			
			var txt=document.getElementById('db').value;
			document.getElementById('text3d').innerHTML = txt+'%'+"\n";
			document.getElementById('per3d').className= cn1+txt;
		}
		</script>
		
		<style>
			
			li
			{
				//margin-left:5%;
				float:left;
				list-style:none;
				margin-left:20px;
			}
			
			.font1
			{
				position:relative;
				text-align:center;
				left:70%;
				font-size:20px;
				font-weight:bold;
				color:White;
				text-shadow: 0px 1px blue
				
			}
			.b
			{
				left:80%;
			}
			.tr ,.tr1{
			
			color:White;text-shadow: 0px 1px blue;font-weight:bold;font-size:20px;font-family:'Open Sans' ,'san-serif';
			
			}
			.tr1
			{
			position:relative;right:40%	
			}
			hr
			{
				position:relative;
			}
			h1{
			color:White;text-shadow: 0px 1px blue;font-weight:bold;
			}
		</style>
	</head>
	<body onload="show()" background="bg.jpg" style="background-size:cover">
	<form method="post">
		<div hidden>
			D.D Survase:<br>
				<input type="text" id="sg" value="<?php echo round($avggs/$per);?>" >
				Good<br>
				<input type="text" id="sa" value="<?php echo round($avgas/$per);?>" >
				Average<br>
				<input type="text" id="sb" value="<?php echo round($avgbs/$per);?>" >
				Excellent<br><br>
			D.B Sisode:<br>
				<input type="text" id="mg" value="<?php echo round($avggm/$per);?>" >
				Good<br>
				<input type="text" id="ma" value="<?php echo round($avgam/$per);?>" >
				Average<br>
				<input type="text" id="mb" value="<?php echo round($avgbm/$per);?>" >
				Excellent<br><br>
			G.P Mohole<br>
				<input type="text" id="dg" value="<?php echo round($avggd/$per);?>" >
				Good<br>
				<input type="text" id="da" value="<?php echo round($avgad/$per);?>" >
				Average<br>
				<input type="text" id="db" value="<?php echo round($avgbd/$per);?>" >
				Excellent<br>
		</div>
	<center>
	<h1>ADMIN</h1>
	<div style="position:relative;width:50%;top:40px;font-family:'Open Sans' ,'san-serif';font-weight:bold;background:black;opacity:0.8;color:white;border-radius:20px;">	
	<center>
	<br>
	<div style="position:relative;width:100%;height:35%;">
		<font class=" tr">D.B Sisode </font><br><br> 
			<ul>
				<li><div style="position:relative;width:30%;height:100%;text-align:center">
					<div class="c100 p0" id="per1m" >
						<span id="text1m">Good</span>
						<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
						</div>
					</div>
					<div class="font1 b">Good</div>
				</div></li>
				
				<li><div style="position:relative;width:30%;height:100%">
					<div class="c100 p0" id="per2m" >
						<span  id="text2m">Average</span>
						<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
						</div>
					</div>
					<div class="font1">Average</div>
				</div></li>
				
				<li><div style="position:relative;width:30%;height:100%">
					<div class="c100 p0" id="per3m" >
						<span  id="text3m">Excellent</span>
						<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
						</div>
					</div>
					<div class="font1 b">Excellent</div>
				</div></li>
			</ul>
		</div>
	
	<hr class="tr tr1">
	<br>
	<div style="position:relative;width:100%;height:35%;">
			<font class="tr1">D.D Survase</font><br><br> 
			<ul>
				<li><div style="position:relative;width:30%;height:100%;text-align:center">
					<div class="c100 p0" id="per1" >
						<span id="text">Good</span>
						<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
						</div>
					</div>
					<div class="font1 b">Good</div>
				</div></li>
				
				<li><div style="position:relative;width:30%;height:100%">
					<div class="c100 p0" id="per2" >
						<span  id="text2">Average</span>
						<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
						</div>
					</div>
					<div class="font1">Average</div>
				</div></li>
				
				<li><div style="position:relative;width:30%;height:100%">
					<div class="c100 p0" id="per3" >
						<span  id="text3">Excellent</span>
						<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
						</div>
					</div>
					<div class="font1 b">Excellent</div>
				</div></li>
			</ul>
		</div>
	<hr class="tr tr1">
		
	<br>
	<div style="position:relative;width:100%;height:30%;">
			<font class="tr1">G.P Mohole </font><br><br> 
			<ul>
				<li><div style="position:relative;width:30%;height:100%;text-align:center">
					<div class="c100 p0" id="per1d" >
						<span id="text1d">Good</span>
						<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
						</div>
					</div>
					<div class="font1 b">Good</div>
				</div></li>
				
				<li><div style="position:relative;width:30%;height:100%">
					<div class="c100 p0" id="per2d" >
						<span  id="text2d">Average</span>
						<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
						</div>
					</div>
					<div class="font1">Average</div>
				</div></li>
				
				<li><div style="position:relative;width:30%;height:100%">
					<div class="c100 p0" id="per3d" >
						<span  id="text3d">Excellent</span>
						<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
						</div>
					</div>
					<div class="font1 b">Excellent</div>
				</div></li>
			</ul>
		</div>
		
		<br><br>
		<input type="button" onclick="show()" value="Refresh" class="tr1" style="background:blue">

	</center>
</div>
</center>
	</form>
</body>
</html>
