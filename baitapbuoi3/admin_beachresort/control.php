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
    public function insert_food($name,$img,$des)
    {
        global $conn;
        $sql="insert into foods(namefood,imgfood,description) values('$name','$img','$des')";
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
    public function del_food($id)
    {
        global $conn;
        $sql="delete from foods where id = '$id'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function update_food($id,$name)
    {
        global $conn;
        $sql="update foods set namefood = '$name' where id = '$id' ";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select_1ob($id)
    {
        global $conn;
        $sql="select id, namefood from foods where id = '$id'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function insert_dives($name,$img,$des)
    {
        global $conn;
        $sql="insert into dives(namedive,imgdive,desdive) values('$name','$img','$des')";
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
    public function insert_rooms($name,$img,$des,$rate)
    {
        global $conn;
        $sql="insert into rooms(nameroom,imgroom,desroom,rate) values('$name','$img','$des','$rate')";
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
    public function select_1obdive($id)
    {
        global $conn;
        $sql="select id_dive, namedive from dives where id_dive = '$id'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select_1obroom($id)
    {
        global $conn;
        $sql="select id_room, nameroom from rooms where id_room = '$id'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function update_dive($id,$name)
    {
        global $conn;
        $sql="update dives set namedive = '$name' where id_dive = '$id' ";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function update_room($id,$name)
    {
        global $conn;
        $sql="update rooms set nameroom = '$name' where id_room = '$id' ";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
}

?>