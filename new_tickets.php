<?php 
include 'config.php';
$curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://desk.zoho.in/api/v1/departments?isEnabled=true",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS =>"",
          CURLOPT_HTTPHEADER => array(
            "orgId:60001280952" ,
            "Authorization:aa8cd2f4d25aa3418e47f953ad9fe323"
          ),
        ));

        $response = curl_exec($curl);
        // print_r($response);exit;
$departments = json_decode($response,true);
$categories =array('None',
'NEW Project CI/CD Pipeline Setup',
'Update CI/CD Pipeline Configuration',
'DevSecOps Pipeline Setup',
'CI/CD pipeline failure',
'Automated Deployment failure',
'Docker and Containers',
'Kubernetes Deployments (like EKS/GCP)',
'Git Source control',
'PWSLab server not responding (502/503 errors)',
'PWSLab Runner not working (jobs not running)',
'User management and Project access',
'Cloud Integration Consultation - AWS/GCP/Azure',
'Others');
$priorities = array('-None-',
'High - Production System Down',
'Medium - System Impaired',
'Low - General Guidance');
include "add_ticket.php";?>