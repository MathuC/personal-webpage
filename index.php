<?php
$index="index";
$result = mysqli_query($conn, "SELECT count FROM count WHERE name='$index'");
$data =array();
if($result->num_rows != 0){
	while ($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
	$count= intval($data[0]["count"]);
}

$count=$count+1;

mysqli_query($conn, "UPDATE count SET count='$count' WHERE name='$index'");

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="animate.css">
<link rel="shortcut icon" href="img/favicon.png">
<title> Mathusan Chandramohan </title>
</head>

<body>
<b><p id="count" style="text-align:right;font-size:15px;font-family:Courier;margin-right:5px;margin-top:0px;margin-bottom:0px;color:black;">Page visited: <?php echo $count; ?> times</p></b>
	<center><h1 class="animate__animated animate__flipInY"> Mathusan Chandramohan</h1></center>
		<div id="floatleft"><img id="me" src="img/me.PNG" class="animate__animated animate__flipInX"></img></div>
		<div id="floatright">
			<h3 class="animate__animated animate__rotateInDownLeft">You can also find me here</h3>
			<a id= "mediumSize" href="https://www.youtube.com/mathusanc">YouTube Channel</a>
			<br>
			<a id= "mediumSize" href="https://www.instagram.com/mathusanc/">Instagram</a>
			<br>
			<a id= "mediumSize" href="https://github.com/MathuC"> GitHub </a>
			<br>
			<a id= "mediumSize" href="https://en.wikipedia.org/wiki/Mr._Clean#:~:text=his%20friend%2C%20Mathusan%20Chandramohan%2C%20a%20rich%20entrepreneur%20from%20Sri%20Lanka.">Mister Clean</a>
		</div>
		<br><br><br>
		<h2 class="animate__animated animate__rotateInDownLeft">About me</h2>
		<p style="max-width:450px;font-size:15px;">
		I am a <a style="font-size:15px" href="https://caps.myfuture.mcgill.ca/profiles/mathusan.chandramohan" id="normalSize">CS & Physics student at McGill University</a>.
		I make music and animation videos on YouTube. I love art, music, science and being in nature. I also love sports, videogames and anything that can challenge me.
		I am always up for learning new stuff, discovering new things, designing, building and creating in general.
		</p>
	<h2 class="animate__animated animate__rotateInDownLeft">Projects</h2>
	<a href="FreeSpeech/login.php">FreeSpeech</a>
	<p>
	FreeSpeech is a secure instant messaging system with double encryption. There is also a feature called WorldChat where every user can communicate instantly with each other: Like a groupchat for the world.
	</p>
	<a href="Trito/index.html">Trito</a>
	<p>
	Trito is a fun little game where the goal is to dodge squares coming your way. The player can move, divide & change color. The game is available on computers but also on mobile devices through their internet browsers.
	</p>
	<h2 class="animate__animated animate__rotateInDownLeft">Project Descriptions</h2>
	<h3 href="FreeSpeech/login.php">FreeSpeech</h3>
	<p>
	Lines of code: 3,000<br>
	Used Javascript, PHP, MySQL, HTML, CSS<br><br>
	I  designed and built this website from scratch since I wanted to learn more about social medias and how they worked. I also wanted to dip my fingers in encryption and learn more about that fascinating area in cryptography and mathematics.
	I also wanted a way to communicate with my friends that was very secure and encrypted to the point that even <b>I</b> didn't have any way
	of decrypting the messages between two other users even if I wrote every line of code.<br><br> I got the idea when I read on the news that Messenger 
	(owned by Facebook) stores all our messages in plaintext. It is more efficient when it comes to an extremely large database of messages but
	some people want more privacy and don't want Mark to have the power to read their messages. If someday, the database gets broken somehow, the hacker could 
	get access to all the messages in plaintext, which is not something that I was very happy to find out. I used <b>AES-256 double encryption</b>. AES-256 has been adopted by the US government and is now used worldwide, so it is very secure. The first encryption is done by the 
	server and the second one is done with a key stored on the user's computer (through the sessionStorage feature of all browsers).
	This private key is generated by using a hash (with a salt (pseudo-random string of bytes) to protect the hash against rainbow table attacks) of their password, so without someone's password it is nearly 
	impossible to decrypt the messages, since hashing is not a reversible function. The passwords are also
	stored separately as hashes (different hash, salt than the private key) so it is also impossible for me to know the passwords.<br><br> 
	I wanted to make a website where the user has all the power in terms of privacy and that they didn't need to trust anyone but themselves, not even the creator of the website.<br>
	This project took a lot of work and it was a totally new experience for me. The design of the website was done all by me: It took a lot of time. The buttons took a surpising amount of time since CSS 
	is not very intuitive in my opinion when it comes to positions of elements on a page.<br> But, the server side scripting, the database management code and the javascript functions were the ones that took 
	the longest time to write and debug. I also needed to find clever solutions to tons of problems I encountered in the way: like a function in javascript that mimics exactly the way PHP renders strings of dates so
	that all the dates (old ones and new ones) look the same.<br><br>
	This website uses around 30 different files with each around 75-150 lines. That's around 3,000 lines of code which is a lot compared to other projects I've done.
	The thing that I am happy about is that it is a very useful website and it taught me <b> A LOT </b> on javascript, CSS, PHP, Mysql, sessions, session variables, cookies and web storage objects like localStorage and sessionStorage variables.<br>
	You can see the javascript, CSS, HTML and some PHP files and more information about the game on <a id="normalSize" href=https://github.com/MathuC/freespeech>github</a>.<br>
	If you want to learn more about how the encryption of messages and passwords work, you can visit <a id="normalSize" href="FreeSpeech/about.html">about FreeSpeech</a>
	
	</p>
	<h3>Trito</h3>
	<p>
	Lines of code: 900<br>
	Used Javascript, PHP, MySQL, HTML, CSS<br><br>
	Trito is a javascript game that I built from scratch. My friend and I did a bet that we needed to learn javascript and CSS in 
	4 days and finish a website. <br><br> I thought of the idea of the game in a day and finished building the game in 
	3-4 days right before the bet deadline. My friend finished his website too.
	I wanted to add a leaderboard, so I worked on that and made the website full-stack in the next week. 
	I also changed the controls to make them more easier. Then, I put in online and a lot of people used the console to change their scores, 
	so I decided to work on adding server side scripts to detect console score and highscore manipulations and also make the javascript more secure so
	that users can't access the server. Then, I also made the game responsive(added touch controls for mobile browsers). I finished the whole
	game in a few weeks working on and off.  <br>
	Working on this game was really fun and I learned a ton about javascript. It was also very fullfilling since I built everything from scratch and was able to use my creativity.
	Building something and being able to show it to people anywhere like with a website
	is something very satisfying.<br>
	You can see the javascript, CSS and HTML files and more information about the game on <a id="normalSize" href=https://github.com/MathuC/trito>github</a>. 
	</p>
	<script>
	<?php
		echo "count= ".$count.";";
	?>
	function getCount(){ 
		var ajax = new XMLHttpRequest();
		ajax.open("GET", "count.php", true);
		ajax.onload= function(){
			if (parseInt(this.responseText)!=count) {
				count= parseInt(this.responseText);
				document.getElementById("count").innerHTML="Page visited: "+count.toString()+" times";
			}
		}
		ajax.send();
	}
	update= setInterval(getCount,3000);
		
	</script>
</body>
</html>