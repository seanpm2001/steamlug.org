<?php
$pageTitle = "Chat";
?>
<?php include_once("includes/header.php"); ?>
		<h1 class="text-center">SteamLUG Chat</h1>
<div class="row">
	<div class="col-md-5">
		<article class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Chat with the SteamLUG Community</h3>
			</div>
			<div class="panel-body">
				<p>This page contains a webchat widget that you can use to connect to the SteamLUG IRC channel. Simply enter a nickname, fill out the captcha and click connect. If you plan to join us regularly, we recommend using a dedicated IRC client such as <a href="http://www.irssi.org/">irssi</a>, <a href="http://www.weechat.org/">weechat</a> or <a href="http://xchat.org/">X-Chat</a>.</p>
				<p>If you are new to our community, please take the time to read our short <a href = '#coc'>Code of Conduct</a> below :)</p>
				<dl class="dl-horizontal">
				<dt>IRC Server</dt><dd>irc.freenode.net</dd>
				<dt>Channel Name</dt><dd>#steamlug</dd>
				<dt>Clickable Link</dt><dd><a href="irc://irc.freenode.net/steamlug">irc://irc.freenode.net/steamlug</a></dd>
				</dl>
			</div>
		</article>
	</div>
	<div class="col-md-7">
		<article class="panel panel-danger" id="coc">
			<div class="panel-heading">
				<h3 class="panel-title">Community Code of Conduct</h3>
			</div>
			<div class="panel-body">
				<p>The only rules are:</p>
				<ul>
					<li>try to think before you speak (<em>it's not that hard ^_^ </em>).</li>
					<li>be patient with and civil towards others (<em>if you're getting cranky, take a break</em>)</li>
					<li>don't distribute inappropriate content (<em>porn, warez, etc.</em>).</li>
					<li>keep your language in check (<em>we have kids around</em>)</li>
				</ul>
				<p>Wantonly ignoring these guidelines may get you kicked or banned.</p>
				<p>If you need assistance or want to report something, one or more of the following channel operators should be nearby:</p>
				<ul>
					<li><a href="http://steamcommunity.com/id/cheeseness">Cheeseness</a></li>
					<li><a href="http://steamcommunity.com/id/flibitijibibo">flibitijibibo</a></li>
					<li><a href="http://steamcommunity.com/id/johndrinkwater">johndrinkwater</a></li>
					<li><a href="http://steamcommunity.com/id/meklu">meklu</a></li>
					<li><a href="http://steamcommunity.com/id/xpander69">xpander</a></li>
				</ul>
				<p>Channel operators found to be abusing their status will have their op rights suspended.</p>
			</div>
		</article>
	</div>
</div>
		<article class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Webclient</h3>
			</div>
			<div class="panel-body">
				<iframe src="https://webchat.freenode.net?channels=steamlug" width="100%" height="600px">
					<p>Your browser does not support iframes.</p>
				</iframe>
			</div>
		</article>
<?php include_once("includes/footer.php"); ?>
