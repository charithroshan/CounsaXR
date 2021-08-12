<?php

if(session_id() == ''){
    session_start();
}

if(!@include_once('functions.inc.php')) {
    include_once("functions.inc.php");
}
if(!@include_once('dbh.inc.php')) {
    include_once("dbh.inc.php");
}

if ( isset($_SESSION["userid"]) ) {
    
    $userid = $_SESSION["userid"];
    
    $userDetails = getUserDetail($conn, $userid);


    if( !($userDetails) ){
        header("location: ../EditPatientProfile.php?error=erroruser");
        exit();
    }

}else{
    header("location: ../EditPatientProfile.php");
}

