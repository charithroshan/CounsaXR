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

if($usertype = $_SESSION["usertype"]){
    if($usertype == "PT"){
        $gigs = getGigForPatient($conn);
        if($gigs !== false){
            foreach($gigs as $gig){
                echo "<h5> " . $gig[2] . "</h5>";
                echo $gig[3] . "<br>";
                echo "<a href='message.php?mid=" . $gig[1] . "' > Send Message...</a>";
            }
        }
    }
}