<head> 
<title>Creature Expert System</title> 
</head> 
<body style="margin:0px; padding:0px; padding-top:150px" > 
<table width="500" align="center" cellpadding="5" cellspacing="5" bgcolor="#4f908a">
  <tr>
    <td bgcolor="#FFFFFF"><h1 style="font-family:Times New Roman; color:#4f908a; text-align:center;">Creature Expert System</h1> 
<p style="font-family:Times New Roman; color:#3e2a0f; text-align:center;"> Welcome to the creature Expert System! </p> 
<p style="font-family:Times New Roman; color:#3e2a0f; text-align:center;">Click the button below to start </p> 
  
<form method="post" action="Creatures.php"> <br/><br>
<input type='image' src='img/start-game.jpg' name='start' value='Start Game' /> 
</form> 
 <?php 
//If form not submitted, display form. 
if (!isset($_POST['start'])){ 
?> 
<?php 
} //If form is submitted, process input 

else{ //Question 1 
echo "<br/><h2>Does the creature live mainly on the land?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes1' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no1' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 




if (isset($_POST['yes1'])){ //Q1 - Yes 
echo "<br/><h2>Does the creature have wings?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes2' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no2' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
elseif(isset($_POST['no1'])){ //Q1 - No 
echo "<br/><h2>Does the creature live in the water?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes3' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no3' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['yes2'])){ //Q1 - Yes and Q2 - Yes 
echo "<br/><h2>Can the creature fly?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes4' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no4' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
elseif(isset($_POST['no2'])){ //Q1 - Yes and Q2 - No 
echo "<br/><h2>Is the creature an insect?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes5' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no5' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['yes3'])){ //Q1 - No and Q2 - Yes 
echo "<br/><h2>Is the creature a reptile?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes6' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no6' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['no3'])){ //Q1 - No and Q2 - No 
echo "<br/><h2>Does the creature have feathers?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes7' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no7' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['yes4'])){ //Q1 - Yes and Q2 - Yes and Q3 - Yes 
echo "<br/><h2>Is the creature your thinking of white?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes8' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no8' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['no4'])){ //Q1 - Yes and Q2 - Yes and Q3 - Yes 
echo "<br/><h2>Is the creature your thinking of white?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes9' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no9' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['yes5'])){ //Q1 - Yes and Q2 - Yes and Q3 - Yes 
echo "<br/><h2>Is the creature your thinking of white?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes10' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no10' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['no5'])){ //Q1 - No and Q2 - No 
echo "<br/><h2>Does the creature have feathers?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes11' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no11' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 

if (isset($_POST['yes6'])){ //Q1 - No and Q2 - Yes 
echo "<br/><h2>Is the creature a reptile?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes12' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no12' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['no6'])){ //Q1 - No and Q2 - No 
echo "<br/><h2>Does the creature have feathers?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes13' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no13' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
}

if (isset($_POST['yes7'])){ //Q1 - Yes and Q2 - Yes and Q3 - Yes 
echo "<br/><h2>Is the creature your thinking of white?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes14' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no14' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['no7'])){ //Q1 - Yes and Q2 - Yes and Q3 - Yes 
echo "<br/><h2>Is the creature your thinking of white?</h2>"; 
echo "<form method='post' action='Creatures.php'> 
<input type='image' src='img/yes.jpg' name='yes15' value='Yes' /> 
<input type='image' src='img/no.jpg' name='no15' value='No' /> 
<input type='image' src='img/reset.png' name='r1' value='Reset' /> 
</form>"; 
} 
if (isset($_POST['r1'])){ //Q1 - Yes 
header("location: Creatures.php");
} 
if (isset($_POST['yes8'])){  
echo "<br/><h2>Its a goose!</h2>"; 
} 
if (isset($_POST['no8'])){ 
echo "<br/><h2>Its a hawk!</h2>"; 
} 

if (isset($_POST['yes9'])){ 
echo "<br/><h2>Its a goose!</h2>"; 
} 
if (isset($_POST['no9'])){ 
echo "<br/><h2>Its a hawk!</h2>"; 
} 


if (isset($_POST['yes10'])){  
echo "<br/><h2>Its a Chinese goose!</h2>"; 
} 
if (isset($_POST['no10'])){ 
echo "<br/><h2>Its a hawk!</h2>"; 
} 

if (isset($_POST['yes11'])){ 
echo "<br/><h2>Its a African goose!</h2>"; 
} 
if (isset($_POST['no11'])){ 
echo "<br/><h2>Its a hawk!</h2>"; 
} 

if (isset($_POST['yes12'])){ 
echo "<br/><h2>Its a Brecon Buff goose!</h2>"; 
} 
if (isset($_POST['no12'])){ 
echo "<br/><h2>Its a hawk!</h2>"; 
} 

if (isset($_POST['yes13'])){ 
echo "<br/><h2>Its a canadian goose!</h2>"; 
} 
if (isset($_POST['no13'])){  
echo "<br/><h2>Its a hawk!</h2>"; 
} 


if (isset($_POST['yes14'])){ 
echo "<br/><h2>Its a Fly goose!</h2>"; 
} 
if (isset($_POST['no14'])){ 
echo "<br/><h2>Its a hawk!</h2>"; 
} 
if (isset($_POST['yes15'])){ 
echo "<br/><h2>Its a White goose!</h2>"; 
} 
if (isset($_POST['no15'])){ 
echo "<br/><h2>Its a hawk!</h2>"; 
} 


?> </td>
  </tr>
</table>

</body> 
</html>