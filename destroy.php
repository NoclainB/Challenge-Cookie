<?php
/**
 * Created by PhpStorm.
 * User: noclain
 * Date: 05/10/17
 * Time: 11:53
 */

session_start();
session_destroy();

header("Location: login.php");