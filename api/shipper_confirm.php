<?php
        try{
                require 'C:\xampp\htdocs\web3\db\dbHelper.php';
        $data= json_decode($_POST['data']);
        $sql="UPDATE tblbill SET claimDate='$data->claimDate', idShipper='$data->idShipper'
                                        WHERE id = '$data->id_bill'";
      //  echo $sql;
        execute($sql);
        echo "success";
        } catch(PDOException $e){
                echo $e->getMessage();
        }

        // {
        //     "claimDate": "2021-07-21",
        //     "idShipper": "2",
        //     "id_bill": "15"

        // }
        

?>
