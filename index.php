<?php
include('../includes/layouts/header.php');

?>
<div class="full-page">
	<div class="nav-bar">
		<div>
			<h1>DEVELOPER FREELANCE SYSTEM</h1>
		</div>
		<nav>
			<ul id = "MenuItems">
				<li><a href="#home">HOME</a></li>
				<li><a href="#abt">ABOUT US</a></li>
				<li><a href="#bg">CONTACT</a></li>
				<li><button class="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
			</ul>
		</nav>
	</div>

	<div class="slider">
		<div class="slides">

			<input type="radio" name="radio-btn" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<input type="radio" name="radio-btn" id="radio4">
	


			<div class="slide first">
				<img src="images/i.jpg" alt="">
			</div>
			<div class="slide">
				<img src="images/b.jpg" alt="">
			</div>
			<div class="slide">
				<img src="images/c.png" alt="">
			</div>
			<div class="slide">
				<img src="images/d.jpeg" alt="">
			</div>

			<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
				<div class="auto-btn4"></div>
			</div>

		</div>
		
		<div class="navigation-manual">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
		</div>
	</div><br><br><br><br><br><br><br>
	<div>
	<div id = 'login-form' class='login-page'>
		<div class="form-box">
			<div class='button-box'>
				<div id='btn'></div>
				<button
				type='button' onclick='login()'class='toggle-btn'>Log In</button>
				<button
				type='button'onclick='signin()'class='toggle-btn'>Sign In</button>
			</div>
			<form id='login' class='input-group-login' method="POST" action="login.php">
				<input type='text' class='input-field' name='un' placeholder='User Name' required>
				<input type='password' class='input-field' name='pw' placeholder='Password' required>
				<select name="se">
					<option>Administrator</option>
					<option selected="selected">Employeer</option>
					<option>Freelancer</option>
				</select><br>
				<input type='checkbox'class='check-box'><span>Remember Password</span>
				<button type='submit' class='submit-btn' name='sub'>Log In</button>
			</form>
			<div id = 'signin' class='input-group-signin'>
				<div class="select">
					<select id="select1" onchange="fun1()">
						<option value="frm1">Admin</option>
						<option value="frm2" selected="selected">Employeer</option>
						<option value="frm3">Freelancer</option></br></br></br>
					</select>
				</div>
				
				<form method="post" name="firstform" id="form1" class='input-group-signin' action="index.php">
					<input type='text' class='input-field' name='fn' placeholder='First Name'required>
					<input type='text' class='input-field' name='mn' placeholder='Middle Name'required>
					<input type='text' class='input-field' name='ln'placeholder='Last Name'required>
					<select name="gn">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<input type='email' class='input-field' name='em' placeholder='E-mail'required>
					<input type='text' class='input-field' name='edu' placeholder='Education Status'required>
					<input type='text' class='input-field' name='ph' placeholder='Phone Number'required>
					<input type='text' class='input-field' name='ci' placeholder='Current City'required>
					<input type='text' class='input-field' name='co' placeholder='Country'required>
					<input type='text' class='input-field' name='un' placeholder='User Name'required>
					<input type='password' class='input-field' name='pw' placeholder='Password'required>
					<br><br>
					<button type='submit'class='submit-btn' name='submit'>Sign In</button>
				</form>
			
				<form name="secondform" id="form2" class='input-group-signin' method="POST" action="index.php">
					<input type="text" name="orgname" class="input-field" placeholder="Organization's Name" required>
					<input type="email" name="email" class="input-field" placeholder="Organization's E-mail Address" required>
					<input type="text" name="orgci" class="input-field" placeholder="Organization's(Company's) City" required>
					<input type="text" name="orgco" class="input-field" placeholder="Organization's(Company's) Country" required>
					<input type="text" name="orgkk" class="input-field" placeholder="Organization's(Company's) Sub-city" required>
					<input type="text" name="orgwe" class="input-field" placeholder="Organization's(Company's) Wereda" required>
					<input type="text" name="orgho" class="input-field" placeholder="Organization's(Company's) House Number" required>
					<input type="text" name="ph" class="input-field" placeholder="Phone number" required>
					<input type="password" name="pw" class="input-field" placeholder="Password" required><br><br>
					<button type="submit" class="submit-btn" name="submit1">Sign In</button>
				</form>

				<form name="thirdform" id="form3" method="POST" class='input-group-signin' action="index.php">
					<input type="text" name="ffn" class="input-field" placeholder="FreeLancer First Name" required>
					<input type="text" name="fmn" class="input-field" placeholder="Freelancer Middle Name" required>
					<input type="text" name="fln" class="input-field" placeholder="Freelancer Last Name" required>
					<input type="email" name="femail" class="input-field" placeholder="Freelancer E-mail Address" required>
					Gender <select name="gender">
					<?php
					$gender=array('Male','Female');
					foreach ($gender as $key => $value) {
						?>
						<option value="<?php echo $value;?>">
							<?php
							echo $value;
							?>
						</option><?php
					}
					?>
					</select>
					<input type="date" name="dob" class="input-field" placeholder="Date of birth" required>
					<input type="text" name="edu" class="input-field" placeholder="Education Status" required>
					<input type="text" name="fph" class="input-field" placeholder="Phone number" required>
					<input type="text" name="paymenthour" class="input-field" placeholder="Payment Per Hour" required>
					Insert your picture <input type="file" name="img" class="input-field" id="image" placeholder="Insert your picture">
					Enter Previous Works You Work On? <input type="file" name="prevwork" class="input-field" placeholder="Enter Previous Works You Work On?" required>
					
					<input type="text" name="ci" class="input-field" placeholder="Enter Current Living City" required>
					<input type="text" name="co" class="input-field" placeholder="Enter Current Living Country" required>
					<input type="text" name="un" class="input-field" placeholder="Enter User Name" required>
					<input type="password" name="pw" class="input-field" placeholder="Enter Password"><br><br>
					<button type="submit" id="insert" class="submit-btn" name="submit2">Sign In</button>
				</form>
				
			</div>
		</div>

	</div>
	<div class="jumbotron">
		<section id="abt_sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
						<div class="title_sec">
							<h1>ABOUT</h1>
						</div>			
					</div>		
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
						<div id="abt">
							<p>DFS is a web based system that interconnect Employeer's and Freelancer's.</br> DFS give Services to all private companys, govermental bureau and freelancers.
							</br>The presentation tier(presentation logic and client tiers) produce what
							users see and interact with via the browser in a web application
							But it takes more than just hyperlinking things- the "stickiness" and
							usability of a website can make or break a business
							A high-quality website has:
							A visually appealing layout
							An intuitive navigation structure
							It's the scope of this course to learn the technology for presentation
							tier
							</p>
							<img src="images/h.jpg" width="20%">
							<img src="images/b.jpg" width="20%">
							<img src="images/d.jpeg" width="20%">
							<img src="images/e.jpg" width="20%">
							<h2>No worries,your are in safe handes DFS.</h2>
						</div>
					</div>			
				</div>
			</div>
		</section>
	</div>

	<div class="jumbotron">
	<div id="bg">
		<section id="ctn_sec">
			
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
							<div class="title_sec">
								<h1 class="cu">Contact US</h1>
							</div>			
						</div>		
						<div class="col-sm-6"> 
							<div id="cnt_form">
								<form id="contact-form" class="contact" name="contact-form" method="post" action="../includes/contact.php">
									<div class="form-group">
										<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
									</div> 
									<div class="form-group">
										<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
									</div> 
									<div class="form-group">
										<button type="submit" class="btn btn-info">Send</button>
									</div>
								</form> 
							</div>
						</div>
					</div>
				</div>
				</section>
				<div class="footer">
					<a href="#"><img src="images/facebook.png" style="padding-right: 25px"></a>
					<a href="#"><img src="images/flickr.png" style="padding-right: 25px"></a>
					<a href="#"><img src="images/twitter.png" style="padding-right: 25px"></a>
					<a href="#"><img src="images/myspace.png" style="padding-right: 25px"></a>
					<a href="#"><img src="images/youtube.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('../includes/function.php');?>