<?php 
header("Content-disposition: attachment; filename=CERTIFICACION.pdf");
header("Content-type: application/pdf");
readfile("CERTIFICACION.PDF");