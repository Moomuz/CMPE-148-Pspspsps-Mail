<?php
//include("src/config.php");

$con = mysqli_connect("localhost", "root", "", "team6");
?>
<?php 

echo <<<_END
<html>
<form method="POST" id="insert_form" action="AddCard.php" >
	
<label class="title">Select Column to add to</label>
   <select name="column"  class="form-control">
  <option disabled selected value> -- select an option -- </option>
    <option value="1">Backlog</option>  
  <option value="2">To Do</option>
  <option value="3">In Progress</option>  
  <option value="4">Blocked</option>
  <option value="5">Done</option>
 </select>
 <br />
 <label class="title">Enter Description</label>
   <input type="text" name="description"  class="form-control" />
   <br />
   
   <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" required>

  </form>
</html>
_END;
function sanitizeFormUsername($inputText) {
	//The strip_tags() function is used to strip HTML and PHP tags from a string.
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}
function mysql_entities_fix_string($conn, $string) {
  return htmlentities(mysql_fix_string($conn, $string));
}
function mysql_fix_string($conn, $string) {
  if (get_magic_quotes_gpc()) $string = stripslashes($string);
  return $conn->real_escape_string($string);
}
function executeQuery($query,$conn){
  $result = $conn->query($query);
  if ($conn->connect_error) die(mysql_fatal_error("OOPS"));
  return $result;
}
if(isset($_POST['column'])){
  $columnNum = $_POST['column'];
$theDesc = mysql_entities_fix_string($con,$_POST['description']);
//unset($_POST);
  echo $theDesc;
  
  $sql = "INSERT INTO cards VALUES (NULL, '1', $columnNum, '$theDesc')";
  if (mysqli_query($con, $sql)) {
    echo "<script type='text/javascript'>alert('INSERTED');</script>";
  } else {
    echo "<script type='text/javascript'>alert('Error');</script>";
  }
  
}else{
  echo "<script type='text/javascript'>alert('Nothing To Insert');</script>";
}
