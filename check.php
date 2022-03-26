<?php include("../includes/function.php");?>
<html>
<head>
	<script type="text/javascript">

	function HidebothForm(){
		document.getElementById("form2").style.visibility = "hidden";
		document.getElementById("form1").style.visibility = "hidden";
	}
	function fun1(){

		var e = document.getElementById('select1');
		var selecteOption = e.options[e.selectedIndex].value;
		if (selecteOption == "frm1") {
			document.getElementById("form2id").style.visibility = "hidden";
			document.getElementById("form1id").style.visibility = "visible";
		}
		else if(selecteOption == "frm2"){
			document.getElementById("form2id").style.visibility = "visible";
			document.getElementById("form1id").style.visibility = "hidden";
		}
		else
		{
			HidebothForm();
		}	
	}
	
	</script>
</head>
<body>
	<div id="form1id">
		<label>form 1</label>
		<form method="post" name="firstform" id="form1" action="">
			<button id="btn1" value="selectall">select all</button>
			<button id="btn3" value="delete checkbox">delete checkbox</button><br><br>
			<input type="checkbox" name="chk" value="one" id="ck1">one</input><br>
			<input type="checkbox" name="chk" value="two" id="ck2">two</input><br>
			<input type="checkbox" name="chk" value="three" id="ck3">three</input><br>
			<input type="checkbox" name="chk" value="four" id="ck4">four</input><br>
			<input type="checkbox" name="chk" value="five" id="ck5">five</input><br>
			<button id="btn4" value="status">status</button>
		</form><hr>
	</div>
	<div id="form2id">
		<label>form 2</label>
		<form name="secondform" id="form2" action="">
			Name:<input type="text" name="name" placeholder="enter your name"><br><br>
			email:<input type="text" name="email" placeholder="enter email id"><br><br>
			<button id="btn5" name="chk" >submit</button>
		</form><hr>
	</div>
	<label>select form</label>
	<select id="select1" onchange="fun1()">
		<option></option>
		<option value="frm1">form 1</option>
		<option value="frm2">form 2</option>
	</select>
</body>
</html>