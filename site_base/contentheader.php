<?
$navlinks = array (
"/en/"=>"Home",
"/en/bio/"=>"Bio",
"/en/work/"=>"Work",
"/en/play/"=>"Play",
"/en/contact/"=>"Contact"
);

?>
<div class="nav">
<ul>
<?
$longesturlmatch="/";
foreach ($navlinks as $navurl=>$navtitle){
	if (
		contains($_SERVER["SCRIPT_NAME"],$navurl) && 
		strlen($navurl)>strlen($longesturlmatch)
		){
			$longesturlmatch=$navurl;
	}
}

foreach ($navlinks as $navurl=>$navtitle){
	$isUrlCurrentPage=($longesturlmatch==$navurl);
	$activePageCss=
		($isUrlCurrentPage)?
		" class=\"activepage\"":
		"";

	echo "<li$activePageCss>";
	if (!$isUrlCurrentPage) echo "<a href=\"$navurl\">";
	echo $navtitle;
	if (!$isUrlCurrentPage) echo "</a>";
	echo "</li>\n";
}
?>
</ul>
</div>
<hr />