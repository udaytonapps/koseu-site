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
        <p>Click on the 'Get Started' link below to see the list of training modules available to you.</p>
        <p>The training will be delivered through videos, text, links, and hands-on experiences. You'll have the opportunites to test your knowledge at he end of each lesson with an assessment and you will be awarded badges along the way as an acknowledge of your newly mastered skills and as a reward for your time.</p>
<?php } else { ?>
        <p>Click on the 'Get Started' link below to see the list of training modules available to you.</p>
        <p>The training will be delivered through videos, text, links, and hands-on experiences. Once you're logged in (hint: upper right corner) you'll have the opportunites to test your knowledge at he end of each lesson with an assessment and you will be awarded badges along the way as an acknowledge of your newly mastered skills and as a reward for your time.</p>
    <?php } ?>
        <p><a href="<?=addSession($CFG->apphome.'/lessons')?>" title="Get Started" class="btn btn-primary">Get Started <span class="fas fa-arrow-right" aria-hidden="true"></span></a></p>
    </div>
</div>
<?php
require "foot.php";
