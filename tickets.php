<?php 


        // $postData = json_encode(array());
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        // CURLOPT_URL => "https://desk.zoho.com/api/v1/tickets?include=contacts,assignee,departments,team,isRead",
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => "",
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 0,
        // CURLOPT_FOLLOWLOCATION => true,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => "GET",
        // CURLOPT_POSTFIELDS =>$postData,
        // CURLOPT_HTTPHEADER => array(
        //     "orgId:2389290" ,
        //     "Authorization:Zoho-oauthtoken 1000.67013ab3960787bcf3affae67e649fc0.83a789c859e040bf11e7d05f9c8b5ef6"
        //   ),
        // ));

        // $response = curl_exec($curl);
        // print_r($response);
        // curl_close($curl);
 $tickets ='{
  "data" : [ {
    "ticketNumber" : "101",
    "subCategory" : null,
    "subject" : "Real Time analysis Requirement",
    "dueDate" : "2016-06-21T16:16:16.000Z",
    "departmentId" : "1892000000006907",
    "channel" : "Email",
    "isRead" : false,
    "onholdTime" : null,
    "source" : {
      "appName" : null,
      "extId" : null,
      "type" : "SYSTEM",
      "permalink" : null,
      "appPhotoURL" : null
    },
    "closedTime" : null,
    "sharedCount" : "0",
    "responseDueDate" : "2017-09-05T11:21:07.000Z",
    "contact" : {
      "firstName" : "Lucas",
      "lastName" : "Carol",
      "phone" : "1 888 900 9646",
      "mobile" : "9876543210",
      "id" : "1892000000042032",
      "type" : null,
      "email" : "carol@zylker.com",
      "account" : {
        "website" : null,
        "accountName" : "desk Account",
        "id" : "1892000000975382"
      }
    },
    "createdTime" : "2013-11-04T11:21:07.000Z",
    "id" : "1892000000042034",
    "department" : {
      "name" : "dasdasdasd",
      "id" : "1892000000006907"
    },
    "email" : "carol@zylker.com",
    "channelCode" : null,
    "customerResponseTime" : "2013-11-04T11:21:07.912Z",
    "productId" : null,
    "contactId" : "1892000000042032",
    "threadCount" : "121",
    "team" : {
      "name" : "kjsdfjks",
      "id" : "8920000000069071"
    },
    "priority" : "High",
    "assigneeId" : "1892000000056007",
    "commentCount" : "1",
    "phone" : null,
    "webUrl" : "https://desk.zoho.com/support/zylker/ShowHomePage.do#Cases/dv/d126330fb061247d9ebddaeb9d93ba74750b0284bc703b38",
    "teamId" : "8920000000069071",
    "assignee" : {
      "firstName" : "dasca",
      "lastName" : "vins",
      "photoURL" : "https://desk.zoho.com/api/v1/agents/1892000000056007/photo?orgId=298902",
      "id" : "1892000000056007",
      "email" : "jack@asdad.com"
    },
    "isSpam" : false,
    "category" : null,
    "status" : "Open"
  }, {
    "ticketNumber" : "176",
    "subCategory" : null,
    "statusType" : "Closed",
    "subject" : "Hi. There is a sudden delay in the processing of the orders. Check this with high priority",
    "dueDate" : "2016-06-01T14:04:07.000Z",
    "departmentId" : "1892000000006907",
    "channel" : "Forums",
    "isRead" : false,
    "onholdTime" : null,
    "source" : {
      "appName" : null,
      "extId" : null,
      "type" : "SYSTEM",
      "permalink" : null,
      "appPhotoURL" : null
    },
    "closedTime" : null,
    "sharedCount" : "0",
    "responseDueDate" : null,
    "contact" : {
      "firstName" : "Jonathan",
      "lastName" : "Casie",
      "phone" : null,
      "mobile" : "9876543211",
      "id" : "1892000000045028",
      "type" : null,
      "email" : "casie@zylker.com",
      "account" : {
        "website" : "www.zylker.com",
        "accountName" : "Zylker sAccount",
        "id" : "1892000000980421"
      }
    },
    "createdTime" : "2014-03-06T09:49:50.000Z",
    "id" : "1892000000094004",
    "department" : {
      "name" : "dasdasdasd",
      "id" : "1892000000006907"
    },
    "email" : "casie@zylker.com",
    "channelCode" : null,
    "customerResponseTime" : "2014-03-22T05:05:08.471Z",
    "productId" : null,
    "contactId" : "1892000000045028",
    "threadCount" : "72",
    "team" : {
      "name" : "kjsdfjks",
      "id" : "8920000000069071"
    },
    "priority" : "High",
    "assigneeId" : "1892000000056007",
    "commentCount" : "0",
    "phone" : null,
    "webUrl" : "https://desk.zoho.com/support/zylker/ShowHomePage.do#Cases/dv/d126330fb061247d9ebddaeb9d93ba74750b02214oc203b38",
    "teamId" : "8920000000069071",
    "isSpam" : false,
    "assignee" : {
      "firstName" : "dasca",
      "lastName" : "vins",
      "photoURL" : "https://desk.zoho.com/api/v1/agents/1892000000056007/photo?orgId=298902",
      "id" : "1892000000056007",
      "email" : "jack@asdad.com"
    },
    "category" : null,
    "status" : "Closed"
  }, {
    "ticketNumber" : "191",
    "subCategory" : null,
    "statusType" : "On Hold",
    "subject" : "Real Time analysis Requirement",
    "dueDate" : null,
    "departmentId" : "1892000000006907",
    "channel" : "Chat",
    "isRead" : true,
    "onholdTime" : "2014-03-28T12:09:10.736Z",
    "source" : {
      "appName" : null,
      "extId" : null,
      "type" : "SYSTEM",
      "permalink" : null,
      "appPhotoURL" : null
    },
    "closedTime" : null,
    "sharedCount" : "0",
    "responseDueDate" : "2017-10-05T11:21:07.000Z",
    "contact" : {
      "firstName" : "Jonathan",
      "lastName" : "Casie",
      "phone" : null,
      "mobile" : null,
      "id" : "1892000000045028",
      "type" : null,
      "email" : "casie@zylker.com",
      "account" : {
        "website" : "www.zylker.com",
        "accountName" : "Zylker Account",
        "id" : "1892000000980421"
      }
    },
    "createdTime" : "2014-03-21T09:16:03.000Z",
    "id" : "1892000000137057",
    "department" : {
      "name" : "dasdasdasd",
      "id" : "1892000000006907"
    },
    "email" : "casie@zylker.com",
    "channelCode" : null,
    "customerResponseTime" : "2014-03-21T10:54:21.802Z",
    "productId" : null,
    "contactId" : "1892000000045028",
    "threadCount" : "19",
    "team" : {
      "name" : "kjsdfjks",
      "id" : "8920000000069071"
    },
    "priority" : "High",
    "assigneeId" : "1892000000042001",
    "commentCount" : "0",
    "phone" : null,
    "webUrl" : "https://desk.zoho.com/support/zylker/ShowHomePage.do#Cases/dv/d11bcdfb061247d9edbacb9d93ba74750b0284bc703b38",
    "teamId" : "8920000000069071",
    "isSpam" : false,
    "assignee" : {
      "firstName" : "dasca",
      "lastName" : "vins",
      "photoURL" : "https://desk.zoho.com/api/v1/agents/1892000000042001/photo?orgId=298902",
      "id" : "1892000000042001",
      "email" : "jack@asdad.com"
    },
    "category" : null,
    "status" : "Custom On Hold"
  } ]
}';


$ticketList =json_decode($tickets,true);
// echo "<pre>";print_r($ticketList['data'][0]['department']);
$i =1;
$statusOpen = 0;
$statusClosed = 0;
$statusOnHold = 0;
foreach ($ticketList['data'] as $key ) {
	if(isset($key['statusType'])){
		if($key['statusType'] == 'Open'){
			$statusOpen++;	
		}else if($key['statusType'] == 'Closed'){
			$statusClosed++;

		}else if($key['statusType'] == 'On Hold'){
				$statusOnHold++;
		}
	}
}
include "home.php";
