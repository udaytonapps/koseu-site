<?php
use \Tsugi\Core\LTIX;

if ( ! defined('COOKIE_SESSION') ) define('COOKIE_SESSION', true);

require_once "tsugi/config.php";

// Do this early to allow sanity-db.php to check in more detail after
// Headers has been sent
$PDOX = false;
try {
    define('PDO_WILL_CATCH', true);
    $PDOX = LTIX::getConnection();
    $LAUNCH = LTIX::session_start();
} catch(PDOException $ex){
    $PDOX = false;  // sanity-db-will re-check this below
}

if ( $PDOX !== false ) LTIX::loginSecureCookie();

$OUTPUT->header();
?>
<style type="text/css">
    div.videoWrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
        margin-bottom: 1em;
    }
    div.videoWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
