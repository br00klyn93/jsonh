<?php
$a = $_GET["link"];
$homepage = file_get_contents($a);
echo $homepage;

