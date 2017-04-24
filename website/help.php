<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
$page_name = "Help";
 include "header.php"; 
 ?>
 
<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="padding: 0 0 0 5px; margin: 0;">


	<embed src="img/usermanual.pdf" width="100%" height="100%" />

</div>