<?php
        require 'C:\xampp\htdocs\web3\db\dbHelper.php';
        $sql="SELECT * From tblcity";
        $listResult=[];
        $result=executeResultArray($sql);
        for( $i=0; $i<count($result); $i++){
                    $code= $result[$i]['code'];
                    $city= $result[$i]['name'];
                   //echo $city;

                    $sql="SELECT * FROM tblbill WHERE idCityFr = '$code'";
                   
                    $list= executeResultArray($sql);
                    $listResult[$code]= count($list);
        }
        echo json_encode($listResult);
        // $sql="SELECT * FROM tblbill WHERE idCityFr = 'HN'";
        // $list= executeResultArray($sql);
        // echo count($list);

?>
