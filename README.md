# phpwweb3
địa chỉ chung của api: về tự sửa lại http://localhost/web3/api/getOneBill.php?id_bill=12
lưu ý sửa đường dẫn require file db 
client_insert: method: post 
  định dạng request: "client_insert":{
                "id_client": "1", 
                "formAdd": "Hanoi",
                "toAdd": "HCM",
                "fromDate": "15-6-2021",
                "claimDate": "17-6-2021",
                "isCOD": "1",
                "listItem": "[but, sach, vo]",
                "cost": "10.000"
        }
  định dạng response:{
                "success" hoặc error
  }
client_delete: method:get
  Request: client_delete.php?id_bill=5
   định dạng response:{
                "success" hoặc error
  }
client_update: method post
   Request: "data":{
                "id_bill": "12", 
                "fromAdd": "Hanoi",
                "toAdd": "HCM",
                "fromDate": "2021-08-17",
                "claimDate": "2021-09-17",
                "isCOD": "1",
                "billStatus":1,
                "listItem": "[but, sach, vo]",
                "cost": "10.000"
        }
 định dạng response:{
                "success" hoặc error
  }
Lưu ý: khi chạy update thì dùng api get dữ liệu điền vào input trước cho client sửa, client sửa cái nào thì sửa ở field đó, field nào k sửa thì để nguyên cái dữ liệu cũ gửi lên. Không được gửi lên rỗng, check rỗng để báo cho client.


getListBill: method get
 request: getListBill.php?id_client=1
 response: {
    "message": "get successfully",
    "0": {
        "id": "12",
        "billCode": "10NMH",
        "fromAdd": "HCM",
        "toAdd": "",
        "fromDate": "0000-00-00",
        "claimDate": "2021-09-17",
        "finishDATE": "0000-00-00",
        "isCOD": "0",
        "billStatus": "0",
        "idShipper": null,
        "idClient": "1",
        "listItem": "[but, sach, vo]",
        "cost": "10"
    },
    "1": {
        "id": "13",
        "billCode": "13NMH",
        "fromAdd": "Hanoi",
        "toAdd": "TB",
        "fromDate": "2021-08-17",
        "claimDate": "2021-09-17",
        "finishDATE": "0000-00-00",
        "isCOD": "1",
        "billStatus": null,
        "idShipper": null,
        "idClient": "1",
        "listItem": "[but, sach, vo]",
        "cost": "10"
    },
    "2": {
        "id": "14",
        "billCode": "14NMH",
        "fromAdd": "Hanoi",
        "toAdd": "TB",
        "fromDate": "2021-08-17",
        "claimDate": "2021-09-17",
        "finishDATE": "0000-00-00",
        "isCOD": "1",
        "billStatus": null,
        "idShipper": null,
        "idClient": "1",
        "listItem": "[but, sach, vo]",
        "cost": "10"
    },
    "3": {
        "id": "15",
        "billCode": "15NMH",
        "fromAdd": "Hanoi",
        "toAdd": "TB",
        "fromDate": "2021-08-17",
        "claimDate": "2021-09-17",
        "finishDATE": "0000-00-00",
        "isCOD": "1",
        "billStatus": null,
        "idShipper": null,
        "idClient": "1",
        "listItem": "[but, sach, vo]",
        "cost": "10"
    },
    "4": {
        "id": "16",
        "billCode": "16NMH",
        "fromAdd": "Hanoi",
        "toAdd": "TB",
        "fromDate": "2021-08-17",
        "claimDate": "2021-09-17",
        "finishDATE": "0000-00-00",
        "isCOD": "1",
        "billStatus": null,
        "idShipper": null,
        "idClient": "1",
        "listItem": "[but, sach, vo]",
        "cost": "10"
    }
}
getOneBill: 
method Get
            reques: getOneBill.php?id_bill=12
            response: {
                "message": "get successfully",
                "id": "12",
                "billCode": "10NMH",
                "fromAdd": "HCM",
                "toAdd": "",
                "fromDate": "0000-00-00",
                "claimDate": "2021-09-17",
                "finishDATE": "0000-00-00",
                "isCOD": "0",
                "billStatus": "0",
                "idShipper": null,
                "idClient": "1",
                "listItem": "[but, sach, vo]",
                "cost": "10"
            }


