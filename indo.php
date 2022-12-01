<?php
$con=mysqli_connect('localhost','root','','lr2');
if(!$con){
    echo "no connect";
}
?>
<style>
* {
    text-align: center;
    font-size: 20pt;
}

div {
    margin-top: 100px;
}
</style>
<div>
    <form action="indo.php" method="POST">
        <input type="text" name="name" /><br><br>
        <input type="password" name="pass" /><br><br>
        <button name="login">login</button>
    </form>
</div>

<?php
session_start();
if(isset($_POST['login'])){
$name=$_POST['name'];
$pass=$_POST['pass'];
$sql="SELECT * FROM `lr2` where
name='$name' and password='$pass'";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($query);
if($row>0){
    echo "<script>alert('yes')</script>";
    while($rown=mysqli_fetch_assoc($query)){
    echo $rown['id'];
    $_SESSION['id']=$rown['id'];
}}
else{
    echo "<script>alert('no')</script>";
}
}


?>