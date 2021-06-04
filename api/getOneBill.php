<?php
        require 'C:\xampp\htdocs\web3\db\dbHelper.php';
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: POST");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
        function msg($message,$extra = []){
            return array_merge([
                'message' => $message
            ],$extra);
        }

        $id_bill= $_GET['id_bill'];
        $sql="SELECT * FROM tblbill WHERE id = $id_bill";
        $result= executeResult($sql);
       
        if($result!=1): echo json_encode(msg("get successfully",$result));
        else: echo json_encode("Can't get bill");
         endif;
        
      

?>
