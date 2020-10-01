<?php
session_start();
require_once '../inc/db.php';

include_once("modelAdmin/model/Admin.php");
include_once("modelAdmin/model/AdminNews.php");

include_once("controllerAdmin/controllerAdmin.php");
include_once("controllerAdmin/controllerAdminNews.php");


include('routeAdmin/routingAdmin.php');//!!!

echo $response;