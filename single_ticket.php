		<?php 

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://desk.zoho.in/api/v1/tickets/".$_GET['id']."?include=contacts,products,assignee,departments,team",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        // CURLOPT_POSTFIELDS =>"",
        CURLOPT_HTTPHEADER => array(
            "orgId:60001280952" ,
            "Authorization:aa8cd2f4d25aa3418e47f953ad9fe323"
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $ticket =json_decode($response,true);
        // echo "<pre>";print_r($ticket);
        include 'ticket_details.php';