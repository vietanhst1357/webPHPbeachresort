<?php
include('connect.php');
class data
{
    public function contact($name,$email,$sub,$mess)
    {
        global $conn;
        $sql="insert into mail(name,email,sub,mess) values('$name','$email','$sub','$mess')";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select_food()
    {
        global $conn;
        $sql="select * from foods";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select_dives()
    {
        global $conn;
        $sql="select * from dives";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select_rooms()
    {
        global $conn;
        $sql="select * from rooms";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
}

?>