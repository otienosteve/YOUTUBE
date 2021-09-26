

<?php
//create connection to the database

$host='localhost';
$user='root';
$pass='';
$db='demo2';


$connected=mysqli_connect($host,$user,$pass,$db); //connected to database




//take values from html form

//first confirm if submit button  is clicked
if(isset($_POST['submit'])){
//confirm if form fields have been populated

if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['phone'])){
//take values from form and store in php variables
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];



//create query

$query="insert into users(name, email, phon) Values ('$name','$email','$phone')";


//insert values into db


$insert=mysqli_query($connected,$query);

//confirm query success

if($insert){

    echo'Data submitted into DB';
}else{

    echo'Data wasnt submitted into the Databse ';
}




}else{


    echo"Please provide values for all fields";
}









}




?>