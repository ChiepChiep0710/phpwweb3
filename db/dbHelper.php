<?php
    require_once('config.php');
    session_start();
    function execute($sql){
        //tao connection
        $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
        // query
        mysqli_query($con,$sql);

        //dong connection
        //echo $sql;
       // echo $sql;
        mysqli_close($con);

    }
    // su dung cho cac cau lenh Select
    function executeResultArray($sql){
        $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE); // connect sql
        $resultset = mysqli_query($con,$sql); // gui cau truy van toi db
        $list = [];
        while($row=mysqli_fetch_array($resultset,1)){ // tra ve ban ghi duoi dang mang
            $list[] = $row;
        }
        mysqli_close($con);
        return $list;
    }
    function executeResult($sql){
        $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE); // connect sql
        $resultset = mysqli_query($con,$sql); // gui cau truy van toi db
       $result = mysqli_fetch_assoc($resultset);
      // echo $result['name'];
        mysqli_close($con);
        return $result;
    }
?>