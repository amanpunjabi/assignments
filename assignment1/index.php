<?php $base_url = "http://localhost/aman/assignment1/";?>
<!DOCTYPE html>
<html>
	<head>
		<title>Header Demo</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			.header{
				width:100%;
				height:125px;
				 
			}
			body{
				margin:0px;
				padding:0px;
			}
			#logo
		  	{
		     	    height: 114px;
			    width: 287px;
			    margin-left: 230px;
		  	}
		  	.call_us
		  	{
		  		 
			    font-style: oblique;
			    margin: 16px 0px 0px 95px;

		  	}
	  		.top_search
			{
			  font-size: 17px;
			  background: url(images/top_search.png) no-repeat;
			  background-position: right;
			  padding-left: 2px;
			  border:1px solid #ccc;
        		}
 
 			.topnav
 			{
 				margin: 11px 0px 0px 22px;
 			}

/* Style the links inside the navigation bar */
			.topnav a {
			  float: left;
			  display: block;
			  color: black;
			  text-align: center;
			  padding: 2px 11px;
			  text-decoration: none;
			  font-size: 17px;
			}

/* Change the color of links on hover */
			.topnav a:hover {

			  color: #A8CE38;
			}
			.topnav a:active {

			  color: #A8CE38;
			}


			.download_button
			{
				background-color: #70716B;
			    border: 1px solid;
			    color: white;
			    padding: 15px 32px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 14px;
			}
			.contact_us_button {
			    background-color: rgb(168,206,56,0.8); 
			    border: none;
			    color: white;
			    text-align: center;
			    /* text-decoration: none; */
			    /* display: inline-block; */
			    font-size: 16px;
			    /* margin: 4px 2px; */
			    padding: 17px 27px;
			    cursor: pointer;


			}
			.read_more_button {
			    background-color: rgb(168,206,56,0.8); 
			    border: none;
			    color: white;
			    text-align: center;
			    /* text-decoration: none; */
			    /* display: inline-block; */
			    font-size: 14px;
			    /* margin: 4px 2px; */
			    padding: 16px 25px;
			    cursor: pointer;
 			}
			.flex-container-header {
			  display: flex;
			  flex-direction: row;
			}

			.flex-container-header > div {

			  width: 44%;
			  margin: 10px;
			  text-align: center;
			  font-size: 30px;
			}
			.flex-container {
			  display: flex;
			  justify-content: center;

			}

			.flex-container > div {

			  margin: 10px;
			  padding: 20px;

			}
			.flex-container-footer {
			    display: flex;
			    justify-content: center;
			    flex-wrap: wrap;
			    overflow: hidden;
			    background-color: black;
			    color:  #696969;

			}

			.flex-container-footer > div {
			 width: 23%;
			}
			.step-container
			{
				 width: 100%;
				 position: absolute;
			}
			.progressbar li{
			  float: left;
			  width: 20%;
			  position: relative;
			  text-align: center;
			}
			.progressbar{
			counter-reset: step;
			list-style: none;
			}
			.progressbar li:before{
			  content:"1";
			  width: 30px;
			  height: 30px;
			  border: 2px solid #bebebe;
			  display: block;
			  margin: 0 auto 10px auto;
			  border-radius: 50%;
			  line-height: 27px;
			  background: white;
			  text-align: center;
			  font-weight: bold;
			  content:counter(step);
			  counter-increment: step;
			}
			.progressbar li:after{
			  content: '';
			  position: absolute;
			  width:100%;
			  height: 3px;
			  background: #979797;
			  top: 15px;
			  left: -50%;
			  z-index:-1;
			}
			.progressbar li:first-child:after{
			 content: none;
			}
			.progressbar li:first-child:before{
			 background: #3aac5d;
			}

			.progressbar li.active + li:after{
	       		background: #3aac5d;
	 		}
			.progressbar li.active + li:before{
			border-color: #3aac5d;
			background: #3aac5d;
			color: white
			}
			#mobile-footer {
	    		bottom: 0;
			width: 100%;
			@media(min-width: 768px) {
			display: none;
			}
			}

		</style>
	</head>
	<body>
		<div class="header" id="home">
			<div style="width: 40%;float: left">
				<img src="<?=$base_url?>/images/logo.png"  id="logo"/>
			</div>
			<div style="width: 60%;float: right;">
				<form class="call_us">
				<label style="padding: 5px;">Call Us Today! (+91)8989878989</label><input type="text" class="top_search" placeholder="search.."  >
				</form>
			
				<div class="topnav">
					<a class="active" href="#home">Home</a>
				  	<a href="#blogs">Dating Blog</a>
				  	<a href="#">Who We Help</a>
				  	<a href="#">Why Vital</a>
				  	<a href="#">Reviews</a>
				  	<a href="#">Contact Us</a>
				</div>
			</div>
		</div>

		<div style=" background-image: url('images/hbg2.png'); height: 500px;">
		  <div style="background: rgba(166,169,162,0.8);height: 150;">
	   		<table border="0" align="center"><tr><td><img src="<?=$base_url?>/images/icon5.png"  /></td><td style="font-size: 23px;
    		color: #ffffff;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td><td> <button class="download_button">Download Now</button></td></tr></table>
		  </div>

		  <div class="flex-container-header">
		   <div style="margin: 129px 24px;">
		   <img src="<?=$base_url?>images/video-play-btn.png" style="padding: 20px 46px;
    			background: rgb(168,206,58,0.6);
			}" />

		   </div>
		   <div style="margin: 56px -5px;">
		   	<p> which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? </p>
			<button class="contact_us_button">Contact Us Now! <i class="fa fa-phone-square" aria-hidden="true"></i></button>
		   </div>
		  
		  </div>
		</div>
		<div class="flex-container" style="margin: 0px 144px;">
			<div>
				<h1 style="font-size: 46px;">About Us</h1>
				<p style="font-size: x-large;
   				 color: #7B7B7B;">It is a long established fact that reader will be distracted</p>
				
				<p style="color: #7B7B7B;"><strong>In a professional context</strong> it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that's filled with content hourly on the day of going live. </p>

				<p style="color: #7B7B7B;"><strong>Lorem ipsum is a pseudo-Latin</strong> text used in web design, typography, layout, and printing in place of English to emphasise design elements over content.</p>
				<ul style=" list-style-image: url('images/arrow1.png');">
				  <li>MS Word</li>
				  <li>Open Office</li>
				  <li>Libre Office</li>
				</ul>
				<p style="color: #7B7B7B;">Lorem Ipsum is a tool that can be useful, used intentionally it may help solve some problems. If you go about content strategy the wrong way, fix that problem.</p>
				<button class="contact_us_button">Contact Us Now! <i class="fa fa-phone-square" aria-hidden="true"></i></button>
			</div>
			<div>
			<img src="<?=$base_url?>images/ab1.png" style="height: 300px;width: 340px; margin-top: 112px;"/>
			</div>
		</div>
		<div style="background-image: url('images/hbg5.png');opacity: 0.8;height: 500px;width:100%">
		<div>
		<p style="text-align: center;font-size: 50px;
		    padding-top:  84px;
		    font-family: serif;
		    color: #ffffff;"">
			<span>How Vital Works</span>
		<br>
		    <span style="font-size: 30px;
		    text-align: center;
		    color: #ffffff">Step, Hope Skip Way To Happiness</span>
		</p>
	      </div>
		<div class="step-container">
		  <ul class="progressbar">
		     <li class="active">Step 1</li>
		    <li>Step 2</li>
		    <li>Step 3</li>
		    <li>Step 4</li>
		    <li>Step 5</li>
		  </ul>
	    </div>
	    <br>
	    <div style="margin-top: 120px;">
	    <center><span style="padding: 9px 24px;
	    background: white;
	    border: 4px solid #A8CE38;
	    font-size: 21px;color: grey;">Pop into our office and meet us face to face</span></center></div>
		</div>

	<div style="height:50px"></div>
	<div style="background-image: url('images/hbg6.png');height: 650px;width: 100%;" >
	<div style="    text-align: center;
	    margin: auto 220px;
	    font-size: 22px;
	    color: #71787F;">
		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
	</div>
	<div class="flex-container" style="margin: 0px 226px;">
	<div style="background: #ffffff;text-align: center;line-height: 25px">
		<img src="<?=$base_url?>/images/icon2.png"/>
		<p style="font-size: 26px;">What is lorem ipsum?</p>
		<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		<button class="contact_us_button">Get Started >></button>
	</div>
	<div style="background: #ffffff;text-align: center;line-height: 25px">
		<img src="<?=$base_url?>/images/icon3.png"/>
		<p style="font-size: 26px;">What is lorem ipsum?</p>
		<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		<button class="contact_us_button">Get Started >></button>
	</div>
	</div>
	</div>

	<div>
		<div style="background-image: url('images/testimonial-bg.jpg');height: 600px;width: 100%">
		<p style="text-align: center;font-size: 50px;margin-top: 0px;
		    padding-top:  84px;
		    font-family: serif;
		    color: #ffffff;"">
			 What Our Clients Say 
			</p>
			<div>
			 <div style="display: inline;
		    padding: 250px;"><img src="<?=$base_url?>images/prev_btn.png"  /></div>
					<div style="display: inline;
		   "><img src="<?=$base_url?>images/our_team_zoe.jpg" style="border-radius: 50%;
		    border: 7px solid #fffff3;
		    padding: 9px;
		    height: 114px;"/></div>
					<div style="display: inline;
		    padding: 250px;"><img src="<?=$base_url?>images/next_btn.png"/></div>

		</div>
		<div style="text-align: center;
		    line-height: 25px;
		    margin: 37px 265px;
		    color: #ffffff;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
		    <p style="font-weight: bold;">-MT. Chatswood</p></div>
				</div>

				<div id="blogs" style="height: 630px;width: 100%;" >
			<div style="    text-align: center;
		    margin: auto 220px;

		    color: #71787F;
		">
		<h1>Our Latest Blog Posts</h1>
	</div>
	<div class="flex-container" style="margin: 0px 226px;">
	<div style="background: #ffffff; line-height: 25px;width: 300px;">
		<img src="<?=$base_url?>/images/user1.png"/>
		 
		<p>Contrary to popular belief, Lorem Ipsum is not simply random text.  </p>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		<button class="read_more_button">Read More</button>
	</div>
	<div style="background: #ffffff; line-height: 25px;width: 300px;">
		<img src="<?=$base_url?>/images/user2.png"/>
		 
		<p>Contrary to popular belief, Lorem Ipsum is not simply random text.  </p>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		<button class="read_more_button">Read More</button>
	</div>
	<div style="background: #ffffff; line-height: 25px;width: 300px;">
		<img src="<?=$base_url?>/images/user3.png"/>
		 
		<p>Contrary to popular belief, Lorem Ipsum is not simply random text.  </p>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		<button class="read_more_button">Read More</button>
	</div>
	</div>
	</div>
	<div style="background: rgba(166,169,162,0.8);height: 150;">
	   		<table border="0" align="center"><tr><td><img src="<?=$base_url?>/images/icon5.png"  /></td><td style="font-size: 23px;
    		color: #ffffff;">Lorem Ipsum is simply dummy text.</td><td> <button class="download_button">Download Now</button></td></tr></table>
	</div>
	</div>
	<div  style="background-color: #333333">
	<div class="flex-container">
	<div>
	<img   src="<?=$base_url?>/images/logo.png" height="110" width="250"/><br>
	<span style="font-size: 30px;
    color: white;">Call Us Today! (02) 90178413</span>


	</div>
	<div>
		<p style="font-size: 20px;
    color: #B0B0B0;">Shortcut Your Search To  happiness Right Now.<br>Live A life without regrets and take a action today!</p>
    <button class="contact_us_button" style="    margin-right: 21px;">Book an Appointment&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i></button><button class="contact_us_button">Contact a Consultant&nbsp;<i class="fa fa-handshake-o" aria-hidden="true"></i></button>
	</div>
	</div>
		<div class="flex-container">
		<div>
		<h4 style="color: white">CONTACT INFO<h4>
		<address style="color: #8E8E8E;">
			B-710,westgate near ymcs,<br>
			(phone):8899779900<br>
			(email):aman@gmail.com
		</address><br><br>
		<address style="color: #8E8E8E;">
			B-710,westgate near ymcs,<br>
			(phone):8899779900<br>
			(email):aman@gmail.com
		</address>
		</div>
		<div>
		<h4 style="color: white">RECENT POSTS</h4>
	 	<ul style=" list-style-image: url('images/icon8.png');color: #696969;
    font-weight: initial;">
				  <li>this is very bad review</li>
				  <li>a very good review</li>
				  <li>this is the best ever</li>
				</ul>
		</div>
		<div>
		<h4 style="color: white">RECENT TWEETS<h4>

		<ul style=" list-style-image: url('images/icon9.png');color: #696969;
    font-weight: initial;">
				  <li>this is very bad review,<br>
				  this is text as lrei
				  <br><a href="#">twitter.com</a></li>
				  <li>a very good review<br>this is text some text.</li>
				  
				</ul>
	 
		</div>

		</div>
	</div>

	<div id="mobile-footer" >
		<div class="flex-container-footer">
			<div><p>@vitalpartners.com.au</p></div>
    	<div><p>Contact|Terms of us|privacy policy</p></div>
    <div><p><span style="float: left;">Follow Us: </span><span style="margin-left: 6px;"><img src="images/icon11.png"/><img src="images/icon10.png"/><img src="images/icon12.png"/><img src="images/icon14.png"/></span></p></div>
		</div>
	</div>

</body>
</html>
 


			
