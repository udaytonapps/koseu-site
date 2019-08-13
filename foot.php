<?php

$foot = '
<div class="footer" style="padding-top:1rem;">
<p class="small text-muted"><em>Copyright <span class="far fa-copyright" aria-hidden="true"></span> '.date("Y").' University of Dayton | Office of eLearning<br/>
The Office of eLearning is committed to ensuring digital accessibility for all learners. All media content on this site has been closed captioned and labeled with the proper html attributes.</em></p>
</div>';

$OUTPUT->setAppFooter($foot);

$OUTPUT->footerStart();
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.nav-popover').popover();
    });
</script>
<?php
$OUTPUT->footerEnd();
