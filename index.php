<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require "top.php";
require "nav.php";

$OUTPUT->pageTitle('Welcome to the Learn Training Platform');
?>
<p class="lead">Explore self-paced lessons on a variety of topics and technologies supported by the Office of eLearning.</p>
<div class="row">
    <div class="col-sm-7">
        <div class="videoWrapper">
            <iframe allowfullscreen src="https://udayton.warpwire.com/w/fw4BAA/"></iframe>
        </div>
        <h4>A Message from Ryan Allen, Director of the Office of eLearning</h4>
    </div>
    <div class="col-sm-5">
<?php if ( isset($_SESSION['id']) ) { ?>
    <h2>Welcome, <?= $_SESSION['displayname'] ?>!</h2>
<?php } ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut culpa doloribus expedita iste iusto minus necessitatibus, nesciunt, nisi officiis quas quisquam temporibus veritatis! Dolores explicabo maiores maxime nisi voluptatum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusantium blanditiis consectetur ea expedita fuga iure.</p>
        <p><a href="<?=addSession($CFG->apphome.'/lessons')?>" title="Get Started" class="btn btn-primary">Get Started <span class="fas fa-arrow-right" aria-hidden="true"></span></a></p>
    </div>
</div>
<?php
require "foot.php";
