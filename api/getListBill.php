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

        $id_client= $_GET['id_client'];
        $sql="SELECT * FROM tblbill WHERE idClient =$id_client ORDER BY id asc";
        $result= executeResultArray($sql);
        $listResult=[];
        for( $i=0; $i<count($result); $i++){
            $index= (string)$i;
           $listResult[$index]=$result[$i];
        }
        if($result!=1): echo json_encode(msg("get successfully",$listResult));
        else: echo json_encode("Can't get bills");
         endif;
        
      

?>
