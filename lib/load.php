<?php
session_start();
require_once(__DIR__ . "/fct.php");
require_once(__DIR__ . "/db/db.service.php");

require_once(__DIR__ . "/service/shopAge.service.php");
require_once(__DIR__ . "/service/shopCategory.service.php");
require_once(__DIR__ . "/service/shopDuration.service.php");
require_once(__DIR__ . "/service/shopPlayer.service.php");
require_once(__DIR__ . "/service/shopTheme.service.php");
require_once(__DIR__ . "/service/shopType.service.php");
require_once(__DIR__ . "/service/staff.service.php");

require_once(__DIR__ . "/class/staff.class.php");
require_once(__DIR__ . "/class/shopAge.class.php");
require_once(__DIR__ . "/class/shopCategory.class.php");
require_once(__DIR__ . "/class/shopDuration.class.php");
require_once(__DIR__ . "/class/shopPlayer.class.php");
require_once(__DIR__ . "/class/shopTheme.class.php");
require_once(__DIR__ . "/class/shopType.class.php");
?>