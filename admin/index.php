<?php
session_start();
required_once '../inc/database.php';
include_once("modelAdmin/model/Admin.php");
include_once("controllerAdmin/controllerAdmin.php");

include('routeAdmin/routingAdmin.php');//!!!

echo $response;