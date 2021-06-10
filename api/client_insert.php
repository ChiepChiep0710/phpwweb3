<?php
        require 'C:\xampp\htdocs\web3\db\dbHelper.php';
        $data= json_decode($_POST['data']);
        //echo $data->reciver;
        $sql="SELECT * FROM tblbill WHERE idClient =$data->id_client ORDER BY id desc";
        $sql2="SELECT * FROM tbluser WHERE id =$data->id_client";
        $result= executeResult($sql);
        echo $result["billcode"];
        $result2= executeResult($sql2);
        echo $result2["username"];
        if($result!=1): $billCode = ((string)((int)$result['id']+1)).($result2['name']);
        else: $billCode = ("1").($result2['name']);
        endif;
       // echo $billCode;
       //echo $data->fromAdd;
      try{  
        $sql="INSERT INTO tblbill ( billcode,receiver, fromadd, toadd, startdate,idClient, idCityFr, idCityTo, items, cost) 
                VALUES ('$billCode','$data->receiver','$data->fromAdd','$data->toAdd','$data->fromDate','$data->id_client','$data->idCityFr','$data->idCityTo','$data->listItem','$data->cost')";
       //echo $billCode;
        //echo "success";
       execute($sql);
      }catch(PDOException $e){
              echo $e->getMessage();
      }

        // {
        //         "id_client": "1", 
        //         "receiver": "binh1",
        //         "idCityFrom": "HN",
        //         "idCityTo": "HCM",
        //         "formAdd": "Hanoi",
        //         "toAdd": "HCM",
        //         "fromDate": "2021-05-15",
        //         "listItem": "[but, sach, vo]",
        //         "cost": "10.000"

        // }
        

?>
