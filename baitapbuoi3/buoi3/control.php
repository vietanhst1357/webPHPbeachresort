<?php
    include('connect.php');
    class data
    {
        public function regist($user,$password,$hoten,$email,$gioitinh,$ngaysinh,$noio)
        {
            global $conn;
            $sql="insert into dangki(tendn,matkhau,hoten,email,gioitinh,ngaysinh,noio) 
                  values('$user','$password','$hoten','$email','$gioitinh','$ngaysinh','$noio')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function add_user($user,$pass)
        {
            global $conn;
            $sqlAdd="insert into user values('$user','$pass')";
            $runAdd=mysqli_query($conn,$sqlAdd);
            return $runAdd;
        }
        public function list_user()
        {
            global $conn;
            $sql="select * from dangki";
            $run=mysqli_query($conn,$sql);
            $data=array();
            while($row=mysqli_fetch_array($run))
            {
                $data[]=$row;
            }
            return $data;
        }
        public function delete_user($id)
        {
            global $conn;
            $sql="delete from dangki where id=$id";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_que()
        {
            global $conn;
            $sql="select tenque from que";
            $run= mysqli_query($conn,$sql);
            $data=array();
            while($rows=mysqli_fetch_array($run))
            {
                $data[]=$rows;
            }
            return $data;
        }
        public function insert_que($tenque)
        {
            global $conn;
            $sql="insert into que(tenque) values('$tenque')";
            $run= mysqli_query($conn,$sql);
            return $run;
        }
        public function list_que()
        {
            global $conn;
            $sql="select * from que";
            $run=mysqli_query($conn,$sql);
            $data=array();
            while($row=mysqli_fetch_array($run))
            {
                $data[]=$row;
            }
            return $data;
        }
        public function delete_que($id)
        {
            global $conn;
            $sql="delete from que where id_que=$id";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function update_que($id,$tenque)
        {
            global $conn;
            $sql="update tenque from que set tenque='$tenque' where id_que=$id";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function insert_anh($files)
        {
            global $conn;
            $sql="insert into dangki(hinhanh) values('$files')";
            $run = mysqli_query($conn,$sql);
            return $run;
        }
    }
?>