

<!DOCTYPE html>
<html>
<head>
<title>Personal Profile</title>
<style>
  .myHeader {
    border: 5px outset blue;
    background-color: lightblue;
    text-align: center;
  }
  table, th, td {
    border: 1px solid black;
    border-collapse: separate;
    border-spacing: 2px;
  }

</style>


</head>
<body>
	<?php
	// Check if form is submitted and we have the fields we want.
	if(isset($_POST["mytext"]))
	{
		$file = "suggestions.txt";
		$text = $_POST["suggest"];

		// This file will create a data.txt file and put whatever is in the POST field mytext into the text and put a new line on the end.
		// The FILE_APPEND allows you to append text to the file. LOCK_EX prevents anyone else from writing to the file at the same time.
		file_put_contents($file, $text . "\r\n", FILE_APPEND | LOCK_EX);
	}
	?>
<h1>Profile Page</h1>
<div class="myHeader">
  <h2>Welcome to my Profile Page</h2>
  <p>Stay hydrated, enjoy your stay</p>
</div>
<h2>Personal Information</h2>
<p><b>Name:</b> Annie Roche</p>
<p><b>Major:</b> Computer Science</p>
<p><b>Dream Career:</b> Game Development</p>
<img src="file:///C:/Users/theal/Downloads/1265749_wcpFWarx.png" alt="Profile Picture" width="250" height="250">
<h2>Education Summary</h2>
<p>Went to Archbishop Molloy highschool, </p>
<p>   then Pace University for a year before</p>
<p>    transfering to St. John's University</p>
<h2>Work Experience</h2>
<ul>
  <li><a href="https://bitbucket.org/anniekia/mediquery/src/main/">Mediquery</a>: A windows app designed to help one track perscriptions</li>
</ul>
<h2>Programming Skills</h2>
<table>
  <tr>
    <th>Language</th>
    <th>Level</th>
  </tr>
  <tr>
    <td>Java</td>
    <td>Advanced, most studied language</td>
  </tr>
  <tr>
    <td>C#</td>
    <td>Beginner, Unity's language</td>
  </tr>
  <tr>
    <td>Lua</td>
    <td>Intermediate, used lightly, but language is pretty intuitive</td>
  </tr>
  <tr>
    <td>c++</td>
    <td>Intermediate, used in game modding for texture swaps</td>
  </tr>
</table>
<h2>General Interests</h2>
<ul>
  <li><b>Tabletop RPGs</b>: especially Mutants and Masterminds and d&d 5e</li>
  <li><b>Video Games</b>: considering my dream career this should be obvious. Favorite right now is <span style = "color:cyan">Disco Elysium</span></li>
  <li><b>Film</b>: Big film buff, see later when I rank my favorite at the moment</li>
</ul>
<h2>Favorite Media</h2>
<h3>Favorite Songs</h3>
<ol>
  <li>"Hunted" - Egypt Central</li>
  <li>"The Steeple" - Halestorm</li>
  <li>"Ready For Combat" - Icon for Hire</li>
</ol>
<h3>Favorite Movie</h3>
<ol>
  <li><i>Baby Driver</i></li>
  <li><i>Spider-Man: No Way Home</i> (yes I am bias, don't care)</li>
  <li><i>Sorry to Bother You</i></li>
</ol>
<h3>Favorite TV Show</h3>
<ol>
  <li><i>JoJo's Bizzare Adventure</i></li>
  <li><i>The Mandalorian</i></li>
  <li><i>Better Call Saul</i></li>
</ol>

<h2>Favorite Post</h2>
<a href="https://youtube.com/shorts/nU6c3pcqrLE?feature=share"> Monkey Slaps Lion</a> (I'm not very mature)

<h2>Menu Section</h2>

<form action = "test.php" name = "suggestion box" method "post">
  <label for="fname">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="lname">Suggestion:</label><br>
  <input type="text" id="suggest" name="suggest">
  <input type="submit" value="Submit">
</form>
</body>
</html>