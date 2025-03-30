<?php

$con=new mysqli("localhost:4306","root","","Hotel_reservation_system");

if($con->connect_error)
{
    die("connection failed ".$con->connect_error);

}



?>