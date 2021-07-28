<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require "top.php";
require "nav.php";
echo '<div class="container">';
$OUTPUT->pageTitle('Welcome to the LEARN Training Platform');
?>
<p class="lead">Explore self-paced lessons on a variety of topics and technologies supported by the Center for Online Learning.</p>
<div class="row">
    <div class="col-sm-5 col-sm-push-7">
<?php if ( isset($_SESSION['id']) ) { ?>
        <h2 style="margin-top:0;">Welcome, <?= $_SESSION['displayname'] ?>!</h2>
        <p>You can choose to complete the entire training packages or individual lessons. The training will be delivered through videos, text, links, and hands-on experiences. At the end of each lesson you will have the opportunity to prove your mastery and test your knowledge through built-in assignments.</p>
        <p>The best part is that you can earn badges along the way as your complete different training packages. The badges serve as a reward and an acknowledgement of your newly mastered skills and dedication to learning. You can use the <strong>Assignments</strong> and <strong>Badges</strong> links in the top bar to keep track of your progress.</p>
<?php } else { ?>
        <p>You can choose to complete the entire training packages or individual lessons. The training will be delivered through videos, text, links, and hands-on experiences. At the end of each lesson you will have the opportunity to prove your mastery and test your knowledge through built-in assignments once you’ve logged in (hint: upper-right corner of this page).</p>
        <p>The best part is that you can earn badges along the way as you complete different training packages. The badges serve as a reward and an acknowledgement of your newly mastered skills and dedication to learning. Once you've logged in, you can use the <strong>Assignments</strong> and <strong>Badges</strong> links in the top bar to keep track of your progress.</p>
    <?php } ?>
        <p>Click on the <strong>Get Started</strong> link below to see the list of training modules available to you.</p>
        <p><a href="<?=addSession($CFG->apphome.'/lessons')?>" title="Get Started" class="btn btn-primary">Get Started <span class="fas fa-arrow-right" aria-hidden="true"></span></a></p>
    </div>
    <div class="col-sm-7 col-sm-pull-5">
        <div class="videoWrapper">
            <iframe allowfullscreen src="https://udayton.warpwire.com/w/fw4BAA/"></iframe>
        </div>
        <h4>A Message from Paul Benson, University of Dayton Provost</h4>
    </div>
</div>
<?php
echo '</div>';
require "foot.php";
