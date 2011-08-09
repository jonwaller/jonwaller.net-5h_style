<?
global $maxrssitems;

function contains($haystack,$needle){
	return substr_count($haystack,$needle)>0;
}

function getUrlContentCached($url){
	global $DOCUMENT_ROOT;
  
	$localfile = "/home/jwaller/".$_SERVER["HTTP_HOST"]."/site_base/cachedata/".urlencode($url).".cache"; 
	$defaultlongestlifesecs=6*60*60; //6 hours

	if (trim($url)==""){
		echo "Caching service failed: Please input a URL.";
		return;
	}

	$dl=TRUE;
	if (file_exists($localfile))
	{
	  if (time()-filemtime($localfile) < $defaultlongestlifesecs)
	  {
		$dl=FALSE;
	  }
	}

	$filecontents="";
	if ($dl)
	{
	  set_time_limit(120);
	  
	  $ch = curl_init();
	  $timeout = 5; // set to zero for no timeout
	  curl_setopt ($ch, CURLOPT_URL, $url);
	  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	  curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	  $filecontents = curl_exec($ch);
	  curl_close($ch);
	  
	  $fp=fopen($localfile,"w");
	  fwrite($fp,$filecontents);
	  fclose($fp);
	}
	else
	{
	  $filecontents = file_get_contents($localfile);
	}
	
	return $filecontents;
}

function startElementBL($parser, $name, $attrs) {
	global $toptag;
	global $d_title;
	global $d_link;
	global $d_date;
	global $d_desc;

	$toptag=$name;
	if ($name=='ITEM'){
		$d_title="";
		$d_link="";
		$d_date="";
		$d_desc="";
	}
}

function endElementBL($parser, $name) {
	global $toptag;
	global $d_title;
	global $d_link;
	global $d_date;
	global $d_desc;
	global $maxrssitems;
	
	$toptag='';
	if ($name=='ITEM' && $maxrssitems>0){
		makeentry($d_date,$d_title,$d_link,$d_desc);
		$maxrssitems--;
	}

}

function characterDataBL($parser, $data) {
	global $toptag;
	global $d_title;
	global $d_link;
	global $d_date;
	global $d_desc;

	if ($toptag=='TITLE') $d_title.=htmlspecialchars($data);
	if ($toptag=='LINK') $d_link.=$data;
	if ($toptag=='PUBDATE') $d_date.=$data;
	if ($toptag=='DESCRIPTION') $d_desc.=$data;

}

function makeentry($d_date,$d_title,$d_link,$d_desc){

	$d_date=date("j M",strtotime($d_date));

	?>
	<div class="twtr-tweet">
		<div class="twtr-tweet-wrap">
			<div class="twtr-tweet-text" style="margin-left:0px">
				<p><a href="<?echo $d_link?>"><?echo $d_title?></a></p>
				<small><?echo $d_date?></small>
			</div>
		</div>
	</div>
	<?
}
?>