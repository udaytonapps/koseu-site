<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require "top.php";
require "nav.php";

$OUTPUT->pageTitle('Office of eLearning');
?>
    <div class="row">
        <div class="col-sm-8">
            <p>Welcome to the Office of eLearning at the University of Dayton. Our goal is to support innovative teaching and learning initiatives for on-campus and online programs while maintaining high quality support of our existing solutions.</p>
            <p>We offer a variety of instructor led workshops, online training resources, and one-on-one consultations to faculty, staff and students at the University of Dayton. Brush up on software skills, learn more about the University's suite of technology tools and get hands-on training for the most commonly used campus applications including Porches, Google Applications, Microsoft Office and more.</p>
            <h3>Vision</h3>
            <p>To be the model of technology-enhanced learning through passion, collaboration, and innovation.</p>
            <h3>Mission</h3>
            <p>The Office of E-Learning is committed to:</p>
            <ul>
                <li>Enriching student learning by developing and integrating innovative software, instructional technologies, and digital media.</li>
                <li>Empowering faculty by promoting best practices in online pedagogy and instructional design.</li>
                <li>Encouraging collaborative relationships through unparalleled service, training, and support.</li>
            </ul>
            <p>Our work is guided by a process of continuous evaluation and improvement that centers on learning both online and in the classroom.</p>
        </div>
        <div class="col-sm-4">
            <div style="padding-left:2rem;padding-bottom:0.5rem;border-left:1px solid var(--text);">
                <h2 style="margin-top:0;">Contact Us</h2>
                <p><span class="fa fa-phone" aria-hidden="true"></span><span class="sr-only">Phone:</span> <strong>(937) 229-5039</strong></p>
                <p><span class="fa fa-envelope" aria-hidden="true"></span><span class="sr-only">Email:</span> <strong>elearning@udayton.edu</strong></p>
                <h3>Hours</h3>
                <dl>
                    <dt>Monday - Friday</dt>
                    <dd>8:30 AM - 4:30 PM</dd>
                </dl>
            </div>
        </div>
    </div>
<?php
require "foot.php";