<?php

define('ga_email','YOUR USERNAME');
define('ga_password','YOUR PASSWORD');
define('ga_profile_id',$_GET['profile']);
define('ga_title',$_GET['title']);

require 'class_gapi.php';

$ga = new gapi(ga_email,ga_password);

$ga->requestReportData(ga_profile_id,array('pagePath'),array('pageviews'),array('-pageviews'),null,date("Y-m-d", mktime(0,0,0,date("m"),date("d")-6,date("Y"))),date("Y-m-d"));


$pviewsarray = array();

foreach($ga->getResults() as $result2){

	$res2 = array(
	         "title" => $result2->getPagePath(),
	         "value" => $result2->getPageviews()
	       );


	array_push($pviewsarray, $res2);
}
?>

<table>

<?php
foreach( $pviewsarray as $row) { 
    echo '<tr>';
    echo '<td>' . $row['title'] . '</td>';
    echo '<td width="80">' . $row['value'] . '</td>';

    echo '</tr>';
} // end foreach
?>
</table>


?>
