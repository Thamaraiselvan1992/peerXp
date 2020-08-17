<?php 
include 'config.php';
$departments = array('PWSLab DevOps Support','iSupport','Test','Omjit');
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