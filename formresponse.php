<?php
$message = "";
$emIL = $_PST["toEmail"];

foreach($_Post as $key => $value)
{
       $ message .= $key . " : " . $ value . "\n");
}

if (empty($post["toEmail"])) {
    echo "<h1>success</h1>";
    echo "email sent";
} else {
    echo "<h1>Failure</h1>";
    echo "email NOT sent"
}