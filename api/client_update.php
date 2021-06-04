<?php
        try{
                require 'C:\xampp\htdocs\web3\db\dbHelper.php';
        $data= json_decode($_POST['data']);
        $sql="UPDATE tblbill SET fromAdd='$data->fromAdd', toAdd='$data->toAdd', fromDate='$data->fromDate',
                                      isCOD='$data->isCOD',  billStatus='$data->billStatus', 
                                        listItem='$data->listItem', cost='$data->cost'  
                                        WHERE id = '$data->id_bill'";
      //  echo $sql;
        execute($sql);
        echo "success";
        } catch(PDOException $e){
                echo $e->getMessage();
        }

        // {
        //         "id_bill": "9", 
        //         "fromAdd": "Hanoi",
        //         "toAdd": "HCM",
        //         "billStatus": "1",
        //         "fromDate": "",
        //         "claimDate": "",
        //         "isCOD": "0",
        //         "listItem": "",
        //         "cost": ""

        // }
        

?>
