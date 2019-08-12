<?php

$foot = '
<div class="footer" style="padding-top:1rem;">
<p class="small text-muted"><em>Copyright <span class="far fa-copyright" aria-hidden="true"></span> '.date("Y").' University of Dayton | Office of eLearning<br/>
The Office of eLearning is committed to ensuring digital accessibility for people with disabilities. All media content on this site has been closed captioned and labeled with the proper html attributes.</em></p>
</div>';

$OUTPUT->setAppFooter($foot);

$OUTPUT->footer();
