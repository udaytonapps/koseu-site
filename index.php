<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require "top.php";
require "nav.php";

$OUTPUT->pageTitle('Welcome to the Learn Training Platform');
?>
<p class="lead">Welcome to the Office of eLearning's training platform, "Learn." Here you will find self-paced lessons on a variety of topics and technologies supported by the Office of eLearning.</p>
<?php if ( isset($_SESSION['id']) ) { ?>
    <h2>Welcome, <?= $USER->displayName ?>!</h2>
<?php } ?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut culpa doloribus expedita iste iusto minus necessitatibus, nesciunt, nisi officiis quas quisquam temporibus veritatis! Dolores explicabo maiores maxime nisi voluptatum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusantium blanditiis consectetur ea expedita fuga iure.</p>
<p><a href="<?=addSession($CFG->apphome.'/lessons')?>" title="Get Started" class="btn btn-primary">Get Started</a></p>
<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
<?php 
require "foot.php";
