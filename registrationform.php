<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>
<h2>Student Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  PhoneNo: <input type="phone" name="phone">
  <br><br>
  Township: <select id="town" name="township">
                <option value="yangon">Yangon</option>
                <option value="mandalay">Mondalay</option>
                <option value="monywa">Monywa</option>
</select><br><br>
  Grade:
  <input type="radio" name="grade" value="Finalyear">Finalyear
  <input type="radio" name="grade" value="Fourthyear">Fourthyear
  <input type="radio" name="gender" value="Thirdyear">Thirdyear
  <br><br>
  Subjects:
  <input type="checkbox" name="subjects[]" value="PHP">PHP
  <input type="checkbox" name="subjects[]" value="Java">Java    
  <input type="checkbox" name="subjects[]" value="C#">C#<br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $township=$_POST['township'];
    $grade=$_POST['grade'];
    $subjects=$_POST['subjects'];
    if(empty($name))
    {
        echo "Name is Empty";
    }
    else{
        echo "Name:" ." ".$name ."<br>";
    }
    if(empty($email))
    {
        echo "Email is Empty";
    }
    else{
        echo "E-mail:" ." ".$email ."<br>";
    }
    if(empty($phone))
    {
        echo " PhoneNo is Empty";
    }
    else{
        echo "PhoneNo:" ." ".$phone ."<br>";
    }
    if(empty($township))
    {
        echo "Township is Empty";
    }
    else{
        echo "Township:" ." ".$township ."<br>";
    }
    if(empty($grade))
    {
        echo "Grade is Empty";
    }
    else{
        echo "Grade:" ." ".$grade ."<br>";
    }
    if(empty($subjects))
    {
        echo "Subjects is Empty";
    }
    else{
        foreach($subjects as $s)
        echo "Subjects:" ." ".$s ."<br>";
    }
}
?>

</body>
</html>