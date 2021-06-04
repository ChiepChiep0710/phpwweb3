<?php
        try{require 'C:\xampp\htdocs\web3\db\dbHelper.php';
        $id_bill= $_GET['id_bill'];
        $sql="DELETE FROM tblbill WHERE id = $id_bill";
        execute($sql);
        echo "success";
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        // {
        //         "id_client": "1", 
        //         "formAdd": "Hanoi",
        //         "toAdd": "HCM",
        //         "fromDate": "15-05-2021",
        //         "claimDate": "17-6-2021",
        //         "isCOD": "1",
        //         "listItem": "[but, sach, vo]",
        //         "cost": "10.000"

        // }
        

?>
