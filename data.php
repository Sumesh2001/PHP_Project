<html>
	<head>
		
		<script>
			function dis()
			{
				
				document.getElementById('all').hidden = true;
			}
			function dis2()
			{
				var tr=document.getElementById('tr').value;
				if(tr=="-Select Option-")
				{
					document.getElementById('all').hidden = true;
				}
				else
				{
					document.getElementById('all').hidden = false;
				}
			}
			function val()
			{
				var q1=[(document.getElementById('1-0').checked),(document.getElementById('1-1').checked),(document.getElementById('1-2').checked)];
				var q2=[document.getElementById('2-0').checked,document.getElementById('2-1').checked,document.getElementById('2-2').checked];;
				var q3=[document.getElementById('3-0').checked,document.getElementById('3-1').checked,document.getElementById('3-2').checked];;
				var q4=[document.getElementById('4-0').checked,document.getElementById('4-1').checked,document.getElementById('4-2').checked];;
				var q5=document.getElementById('5').value;
				var rno=document.getElementById('rno').value;
				var name=document.getElementById('name').value;
				
				if((q1[0]==false)&&(q1[1]==false)&&(q1[2]==false))
				{
					alert("Select Some Value for Question 1");
					return false;
				}
				else if((q2[0]==false)&&(q2[1]==false)&&(q2[2]==false))
				{
					alert("Select Some Value For Question 2");
					return false;
				}
				else if((q3[0]==false)&&(q3[1]==false)&&(q3[2]==false))
				{
					alert("Select Some Value For Question 3");
					return false;
				}
				else if((q4[0]==false)&&(q4[1]==false)&&(q4[2]==false))
				{
					alert("Select Some Value For Question 4");
					return false;
				}
				else if(q5=="")
				{
					alert("Enter Some feedback");
					return false;
				}
				else if(rno=="")
				{
					alert("Enter The Roll No");
					return false;
				}
				else if(name=="")
				{
					alert("Enter The Name");
					return false;
				}
			}
		</script>
		<style>
			
			.divf
			{
				background:none;position:relative;width:100%;padding:2%;
				border-radius:20px;color:white;text-shadow: 2px 2px blue;
			}
			
			.f2{
				background:black;position:relative;width:100%;padding:2%;border-radius:20px;margin-top:2%;
				font-size:bold;color:white;opacity:0.6;text-shadow: 0px 1px blue;
			}
			.f2:hover
			{
				opacity:0.7;
			}
			.f1 input[type=radio]
			{
				color:blue;
			}
			
		</style>
		<!--#ece8e8-->
	</head>
	<body onload="dis()" background="bg.jpg" style="background-size:cover">
	<div name="feedback" width="50%" align="center" style="position:relative;width:50%;left:25%;top:40px;font-family:'Open Sans' ,'san-serif';font-weight:bold;">
	
	
		
		
		<div class="f1">
		<form name="f1" action="valid.php" method="get" onsubmit="return val()" class="f2">
		<div  class="divf">
		<h1>
		Feedback
		</h1>
		</div>
		<div style="margin:20p">
		Teacher :
		 <select name="teacher" id="tr" onchange="dis2()" style="background:#f1f1f1;border:none;">
			<option select>-Select Option-</option>
			<option>D.D Survase</option>
			<option>D.B Sisode</option>
			<option>G.P Mohole</option>
			</select>
		</div>
		<br>
		<div id="all">
		<Table border="0" style="text-align:center;color:white" class="f1">
		<tr>
			<th><h3>Quetions</h3></th>
			<th colspan="3"><h3>Option</h3></th>
		</tr>
			<!--1st-->
		<tr>
			<th align="left">Has teacher has covered entire syallbus in time</th>
			<td><input type="radio" name="1" id="1-1" value="Average" required>Average</td>
			<td><input type="radio" name="1" id="1-2" value="Good">Good</td>
			<td><input type="radio" name="1" id="1-0" value="Excellent" >Excellent</td>
		</tr>
		<!--2nd-->
		<tr>
			<th align="left">Technicall Knowledge</th>
			<td><input type="radio" name="2" id="2-1"value="Average"required>Average</td>
			<td><input type="radio" name="2" id="2-2"value="Good">Good</td>
			<td><input type="radio" name="2" id="2-0" value="Excellent" >Excellent</td>
		</tr>
		<!--3rd-->
		<tr>
			<th align="left">Communcation Skill</th>
			<td><input type="radio" name="3" id="3-1" value="Average" required>Average</td>
			<td><input type="radio" name="3" id="3-2" value="Good">Good</td>
			<td><input type="radio" name="3" id="3-0" value="Excellent">Excellent</td>
		</tr>
		<tr></tr>
		<!--4th-->
		<tr>
			<th align="left">Presentation Skill</th>
			<td><input type="radio" name="4" id="4-1" value="Average" required>Average</td>
			<td><input type="radio" name="4" id="4-2" value="Good">Good</td>
			<td><input type="radio" name="4" id="4-0" value="Excellent">Excellent</td>
		</tr>
		
		<tr>
			<th colspan="4" align="left">Please provide your feedback : </th>
		</tr>
		
		<tr>
			<th colspan="4">
				<textarea style="width:95%;" rows="5" name="feedback" id="5" style="resize:none;overflow:none" required></textarea>
			
			</th>
		</tr>
		</table>
	
	<br><br><br><br><br><br>
		<font class="text">
			<center>
			Roll No : &nbsp; &nbsp; &nbsp;<input type="text" name="rno" id="rno" required>&nbsp;
			First Name : <input type="text" name="name" id="name" required> 
			<br/><br/>
			<input type="Submit" style="border-radius:20px;border:none;color:white;background:blue;shadow: 0px 1px blue;font-weight:bold;font-size:15"><br/>
			</center>
		</font>
			</div>
		</div>
		
		</form>
	</body>
</html>