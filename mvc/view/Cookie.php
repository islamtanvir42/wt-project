<?php
function setLastVisitCookie() {
    $lastVisit = date('Y-m-d H:i:s'); 
    setcookie('last_visit', $lastVisit, time() + (30 * 24 * 60 * 60));
}

function displayLastVisit() {
    if (isset($_COOKIE['last_visit'])) {
        $lastVisit = $_COOKIE['last_visit'];
        echo 'Your last visit was on: ' . $lastVisit;
    } else {
        echo 'Welcome to the page for the first time!';
    }
}

setLastVisitCookie();
?>