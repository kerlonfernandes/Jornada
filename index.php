<?php

use HelpersClass\SupAid;

require_once  "./core/Core.php";

$inc_files = glob("_app/*.inc.php");
$inc_classes = glob("classes/*.inc.php");

$_app = new Core();

$_app::_inc($inc_files);
$_app::_inc($inc_classes);


$_app::run("views/", "home");
