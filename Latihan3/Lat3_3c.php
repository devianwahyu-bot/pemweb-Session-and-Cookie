<?php
session_start();
for ($i = 0; $i < 4; $i++) {
    echo $_SESSION["data"][$i];
    echo "|";
}
session_destroy();
