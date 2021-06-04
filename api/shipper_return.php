<?php
        try{
                require 'C:\xampp\htdocs\web3\db\dbHelper.php';
        $data= json_decode($_POST['data']);
        $sql="UPDATE tblbill SET billStatus='$data->billStatus'
                                        WHERE id = '$data->id_bill'";
      //  echo $sql;
        execute($sql);
        echo "success";
        } catch(PDOException $e){
                echo $e->getMessage();
        }

        // {
        //     "billStatus": "4",
        //     "id_bill": "15"

        // }
        

?>