<?php
        require 'C:\xampp\htdocs\web3\db\dbHelper.php';
        $data= json_decode($_POST['data']);
        $sql="SELECT * FROM tblbill WHERE idClient =$data->id_client ORDER BY id desc";
        $sql2="SELECT * FROM tblclient WHERE id =$data->id_client";
        $result= executeResult($sql);
        $result2= executeResult($sql2);
        if($result!=1): $billCode = ((string)((int)$result['id']+1)).($result2['name']);
        else: $billCode = ("1").($result2['name']);
        endif;
       // echo $billCode;
       //echo $data->fromAdd;
      try{  
        $sql="INSERT INTO tblbill ( billCode, fromAdd, toAdd, fromDate,idClient,  isCOD, listItem, cost) 
                VALUES ('$billCode','$data->fromAdd','$data->toAdd','$data->fromDate','$data->id_client','$data->isCOD','$data->listItem','$data->cost')";
       //echo $billCode;
        echo "success";
       execute($sql);
      }catch(PDOException $e){
              echo $e->getMessage();
      }

        // {
        //         "id_client": "1", 
        //         "formAdd": "Hanoi",
        //         "toAdd": "HCM",
        //         "fromDate": "15-05-2021",
        //         "isCOD": "1",
        //         "listItem": "[but, sach, vo]",
        //         "cost": "10.000"

        // }
        

?>
