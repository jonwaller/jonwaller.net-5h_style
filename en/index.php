<html>
	<?include "../site_base/functions.php";?>
	<head>
		<title>Jonathan Waller</title>
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
		<link rel="bitcoin" href="http://bitcoin.jonwaller.net/" />
		<link href="/site_base/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="content"><!--800px-->
			<? include ("../site_base/contentheader.php");?>
						
			<div class="videosidebox">
				<p>
					Hi there, thanks for stopping by.
				</p>
				<p align="right">
					- Jonathan Waller
				</p>
			</div>
			
			<div class="videobox">
				<iframe src="http://player.vimeo.com/video/24853277?title=0&amp;byline=0&amp;portrait=0&amp;color=ff8800" width="580" height="326" frameborder="0"></iframe>
			</div>
			
			<div style="clear:both"></div>
			
			<br /><br />
			<br /><br />
					
			<div class="contentstrip contentstripleft">
				<img src="http://www.twitter.com/favicon.ico" /> <a href="http://www.twitter.com/jonwaller/">Twitter</a>
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
			
			<div class="contentstrip contentstripcenter">
				<img src="/site_base/images/livejournal.png" /> <a href="http://whitez.livejournal.com/">Blog</a>
				<?
				$rssurl="http://whitez.livejournal.com/data/rss/";
				include "../site_base/rss_widget.php";
				?>
			</div>

			<div class="contentstrip contentstripright">
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