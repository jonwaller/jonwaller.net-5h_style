<html>
<!--
history
skills (build trust)
experience
abilities

connect
-be vunrable
-listen
-it's how you make them feel
-talk to them 1 to 1 
or 1 to 2
-be yourself, no pedestal
"i'm a human, this is what i feel"

how i can help you


---


really liking yourself. really, truly connecting. really caring about others
-->
	<?include "../site_base/functions.php";?>
	<head>
		<title>Jonathan Waller - JonWaller.net</title>
		<link href="/site_base/style.css" rel="stylesheet" type="text/css">
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	</head>
	<body>
		<div id="content"><!--800px-->
			<? include ("../site_base/contentheader.php");?>
			<br /><br />
			<div style="float:left;width:200px">
			<p>
			Hi there, thanks for stopping by.
			</p>
			<p align="right">
			- Jonathan Waller
			</p>
			</div>
			<div style="float:right;width:580px">
			<iframe src="http://player.vimeo.com/video/10637389?title=0&amp;byline=0&amp;portrait=0&amp;color=ff8800" width="580" height="326" frameborder="0"></iframe>
			</div>
			<div style="clear:both"></div>
			
			<br /><br />
			<br /><br />
			
			
			<div style="width:15em;height:500px;padding-right:1em;border-right:1px black solid;float:left">
			<img src="http://www.twitter.com/favicon.ico" /> <a href="http://www.twitter.com/jonwaller/">Twitter</a>
			<style>
			.twtr-hd{display:none}
			.twtr-ft{display:none}
			</style>
			<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'profile',
				  rpp: 10,
				  interval: 6000,
				  width: 'auto',
				  height: 300,
				  theme: {
					shell: {
					  background: '#ffffff',
					  color: '#000000'
					},
					tweets: {
					  background: '#ffffff',
					  color: '#000000',
					  links: '#ff8800'
					}
				  },
				  features: {
					scrollbar: false,
					loop: false,
					live: false,
					hashtags: true,
					timestamp: false,
					avatars: false,
					behavior: 'all'
				  }
				}).render().setUser('jonwaller').start();
			</script>
			</div>
			
			<div style="width:15em;height:500px;padding-left:1em;padding-right:1em;border-right:1px black solid;float:left">
				<img src="/site_base/images/livejournal.png" /> <a href="http://whitez.livejournal.com/">Blog</a>
				<?
				$rssurl="http://whitez.livejournal.com/data/rss/";
				include "../site_base/rss_widget.php";
				?>
			</div>

			<div style="width:15em;height:500px;padding-left:1em;border-right:0px black solid;float:left">
				<img src="http://www.tanos.co.uk/favicon.ico" /> <a href="http://www.tanos.co.uk/writing/">Articles</a>
				<?
				$rssurl="http://www.tanos.co.uk/writing/rss/";
				include "../site_base/rss_widget.php";
				?>
			</div>
			
			<div style="clear:both"></div>
			
			<? include ("../site_base/contentfooter.php");?>
		</div><!-- content -->
	</body>
</html>