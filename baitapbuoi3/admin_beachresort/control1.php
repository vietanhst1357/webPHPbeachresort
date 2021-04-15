    <?php
        include('./connect1.php');
        class data
        {
            public function login($user)
            {
                global $conn;
                // $sql="insert into user values ('$user','$pass')";
                $sql="select * from user where username='$user'";
                $run=mysqli_query($conn,$sql);
                $data = array();
                while($row=mysqli_fetch_array($run))
                {
                    $data[]=$row;
                }
                return $data;
                // return $run;
            }
            public function add_user($user,$pass)
            {
                global $conn;
                $sql="insert into user values ('$user','$pass')";
                $run=mysqli_query($conn,$sql);
                return $run;
            }
        }
    ?>