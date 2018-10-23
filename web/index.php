<?php
$a = $_GET["link"];
$homepage = file_get_contents($a);
include("https://abs.twimg.com/a/1539634420/css/t1/twitter_core.bundle.css");
echo $homepage;

