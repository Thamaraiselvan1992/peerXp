<?php 
$postData='{
  "subCategory" : "Sub General",
  "cf" : {
    "cf_permanentaddress" : null,
    "cf_dateofpurchase" : null,
    "cf_phone" : null,
    "cf_numberofitems" : null,
    "cf_url" : null,
    "cf_secondaryemail" : null,
    "cf_severitypercentage" : "0.0",
    "cf_modelname" : "F3 2017"
  },
  "productId" : "",
  "contactId" : "1892000000042032",
  "subject" : "Real Time analysis Requirement",
  "dueDate" : "2016-06-21T16:16:16.000Z",
  "departmentId" : "1892000000006907",
  "channel" : "Email",
  "description" : "Hai This is Description",
  "priority" : "High",
  "classification" : "",
  "assigneeId" : "1892000000056007",
  "phone" : "1 888 900 9646",
  "category" : "general",
  "email" : "carol@zylker.com",
  "status" : "Open"
}';
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://desk.zoho.com/api/v1/tickets",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>$postData,
        CURLOPT_HTTPHEADER => array(
            "orgId:2389290" ,
            "Authorization:Zoho-oauthtoken 1000.67013ab3960787bcf3affae67e649fc0.83a789c859e040bf11e7d05f9c8b5ef6"
          ),
        ));

        $response = curl_exec($curl);
        print_r($response);
        curl_close($curl);
        header('Location: home.php');