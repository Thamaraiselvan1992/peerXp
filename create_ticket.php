<?php 
        
	$postData='{
	  "contactId" : "7189000000052027",
	  "subject" : "'.$_POST['subject'].'",
	  "departmentId" : "'.$_POST['department'].'",
	  "description" : "'.$_POST['description'].'",
	  "priority" : "'.$_POST['priority'].'",
	  "phone" : "'.$_POST['phone'].'",
	  "category" : "'.$_POST['category'].'",
	  "email" : "'.$_POST['email'].'",
	  "status" : "Open",
	  "cf":{
	  	"cf_pwslab_project_url" : "'.$_POST['url'].'"
	  }
	}';

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://desk.zoho.in/api/v1/tickets",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>$postData,
        CURLOPT_HTTPHEADER => array(
            "orgId:60001280952" ,
            "Authorization:aa8cd2f4d25aa3418e47f953ad9fe323"
          ),
        ));

        $response = curl_exec($curl);
        $d=json_decode($response);
        // print_r($d->modifiedTime);exit;
		// $file='{
		//   "size" : "'.$_FILES['file']['size'].'",
		//   "creatorId" : "7189000000052027",
		//   "name" : "'.$_FILES['file']['name'].'",
		//   "createdTime" : "'.$d->createdTime.'",
		//   "isPublic" : false,
		//   "id" : "'.$d->id.'"
		// }';
		// $curl = curl_init();
  //       curl_setopt_array($curl, array(
  //       CURLOPT_URL => "POST https://desk.zoho.in/api/v1/uploads",
  //       CURLOPT_RETURNTRANSFER => true,
  //       CURLOPT_ENCODING => "",
  //       CURLOPT_MAXREDIRS => 10,
  //       CURLOPT_TIMEOUT => 0,
  //       CURLOPT_FOLLOWLOCATION => true,
  //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //       CURLOPT_CUSTOMREQUEST => "POST",
  //       CURLOPT_POSTFIELDS =>$file,
  //       CURLOPT_HTTPHEADER => array(
  //           "orgId:60001280952" ,
  //           "Authorization:aa8cd2f4d25aa3418e47f953ad9fe323"
  //         ),
  //       ));

  //       $response = curl_exec($curl);
  //       print_r($response);exit;
        curl_close($curl);
	  	header('Location: tickets.php');