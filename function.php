<script type="text/javascript">

$(document).ready(function(){
	$('#insert').click(function(){
		var image_name = $('#image').val();
		if (image_name == '') {
			alert("Please Select Image");
			return false;
		};
		else{
			var extension = $('#image').val().split('.').pop().toLowerCase();
			if (jQuery.inArray(extension. ['gif','png','jpg','jpeg']) == -1) {
				alert('Invalid Image File');
				$('#image').val();
				return false;
			};
		}
	});
});
</script>
<script type="text/javascript">
var counter = 1;
setInterval(function(){
	document.getElementById('radio' + counter).checked = true;
	counter++;
	if (counter > 4) {
		counter = 1;
	};
}, 5000);
		</script>

<script>
var x=document.getElementById('login');
var y=document.getElementById('signin');
var z=document.getElementById('btn');
function signin()
{
	x.style.left='-400px';
	y.style.left='50px';
	z.style.left='110px';
}
function login () {
	x.style.left='50px';
	y.style.left='450px';
	z.style.left='0px';
}
</script>
<script>
var t=document.getElementById('login-form');
window.onclick=function(event)
{
	if (event.target==t) {
		t.style.display="none";
	}
}
</script>
<script type="text/javascript">

	function HidebothForm(){
		document.getElementById("form2").style.visibility = "hidden";
		document.getElementById("form1").style.visibility = "hidden";
		document.getElementById("form3").style.visibility = "hidden";
	}
	function fun1(){

		var e = document.getElementById('select1');
		var selecteOption = e.options[e.selectedIndex].value;
		if (selecteOption == "frm1") {
			document.getElementById("form2").style.visibility = "hidden";
			document.getElementById("form1").style.visibility = "visible";
			document.getElementById("form3").style.visibility = "hidden";
		}
		else if(selecteOption == "frm2"){
			document.getElementById("form2").style.visibility = "visible";
			document.getElementById("form1").style.visibility = "hidden";
			document.getElementById("form3").style.visibility = "hidden";
		}
		else if (selecteOption == "frm3") {
			document.getElementById("form3").style.visibility = "visible";
			document.getElementById("form1").style.visibility = "hidden";
			document.getElementById("form2").style.visibility = "hidden";
		}else
		{
			HidebothForm();
		}	
	}
	
	</script>

	<script type="text/javascript">

	var counter = 1;
	setInterval(function(){
		document.getElementById('radio' + counter) = true;
		counter++;
		if (counter > 4) {
			counter = 1;
		};
	}, 5000);
	</script>