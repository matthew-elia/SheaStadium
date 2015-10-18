@extends('app')

@section('content')

<style>
	
	.about-section {
		margin:40px 0px;
	}
	.press-section {
		margin:40px 0px;
	}
	.fam-and-friends-section {
		margin:40px 0px;
	}

</style>

<div class="container">

	<div class="col-md-9">

		<div class="about-section">
			<div class="row">
				<h1>About</h1>
				<p>Shea Stadium BK is a recording studio/all ages space dedicated to documenting live performances.<br><br>
				Formed in the spring of 2009 by a couple of native Brooklynites, Live @ Shea Stadium has already amassed an archive of well over 1,000 sets by hundreds of different bands and artists from all over the globe. Since its inception, the mission was to create an environment that would function as a recording studio and rehearsal space by day, and by night a space that would capture and later share its live performances– each session contributing to an infinite aural documentary of live contemporary music. Unlike many other sources for recorded music, nearly all of the artists in the archive are current, active, living, breathing entities, making relevant independent music that deserves to be heard and is in need of support. In 2011, after a recording a year and a half’s worth of sessions, www.liveatsheastadium.com was launched for this purpose– a site which regularly updates and archives handpicked highlights from the past week at the space.<br><br>
				The process is simple: every single session that takes place inside these four walls is recorded, and later mixed and mastered a week or so afterwards. Post production is kept to a minimum (generally limited to EQ, compression, and occasional reverb/delay) so that the sonic integrity of the performance is always preserved. These recordings are meant to serve as organic representations of a band performing in their natural live state, in front of an audience, with the absence of studio magic and without the ability to do more than one take.<br><br>
				In an era in which the live album as a commodity is virtually dead, and free recorded music is available at every turn, this site hopes to fill a void as a rare resource for free live music. All of the recorded performances on this site are unique and cannot be found anywhere else. For those who ever bought or collected bootlegs of their favorite bands or of shows that they have attended, the archives in that same way are meant to preserve a specific moment in time that can never be recreated. For those who never cared about that sort of thing, it is a resource for discovering and sharing new music, and in some cases a tool for charting the growth of a lot of the local and touring bands that have passed through our space on several occasions, whether it was weeks, months or years apart. Although these recordings for the time being are for streaming only, listeners should feel free to share them with whomever they wish. Ultimately, it is for this reason that archives exist– as a way of giving back to a musical landscape that has for years, built itself on a strong sense of community.
				</p>
			</div>
		</div>

		<div class="press-section">
			<div class="row">
				<h1>Press</h1>
				<ul class="list-unstyled">
					<li><a href="http://www.nytimes.com/2012/08/19/nyregion/at-the-other-shea-stadium-in-east-williamsburg-music-and-mosh-pits.html">Playing At Shea, Not The Mets</a> - New York Times</li>
					<li><a href="http://www.villagevoice.com/bestof/2012/award/best-diy-all-ages-venue-3757608/">New York Best All-Ages DIY Venue</a> - The Village Voice</li>
					<li><a href="http://www.villagevoice.com/2014-05-14/music/shea-stadium-brooklyn-venue/">One Night At Shea Stadium</a> - The Village Voice</li>
					<li><a href="http://www.npr.org/blogs/allsongs/2011/01/28/133076388/10-concerts-you-should-hear-from-shea-stadiums-vault">10 Concerts You Should Hear From Shea Stadium’s Vault</a> - National Public Radio</li>
					<li><a href="http://www.thefader.com/2011/01/21/stream-almost-every-show-at-shea-stadium-last-year/">Stream: Almost Every Show at Shea Stadium Last Year</a> - The Fader</li>
					<li><a href="http://blogs.villagevoice.com/music/2011/03/post_30.php">Top 10 “Live At Shea Stadium” Bootlegs, Starring Screaming Females, Teeth Mountain, And The So So Glos</a> The Village Voice</li>
					<li><a href="http://alteredzones.com/posts/764/brooklyn-diy-venue-unveils-online-live-recordings-archive/">Brooklyn DIY Venue Unveils Online Live Recordings Archive</a> - Altered Zones</li>
					<li><a href="http://www.papermag.com/arts_and_style/2009/09/stadium-show.php">Stadium Show: A DIY Venue Grows in Brooklyn</a> - Paper Magazine</li>
					<li><a href="http://eye.columbiaspectator.com/?q=article%2F2012%2F02%2F16%2Froom-rock">Room to Rock: How Brooklyn’s DIY Art Spaces Are Changing Live Music In NYC</a> - Columbia Spectator</li>
					<li><a href="www.paris-newyork.tv/shea-stadium-le-new-york-underground/">Shea Stadium, le New York musical underground</a> - Paris New York TV</li>
				</ul>
			</div>
		</div>

		<div class="fam-and-friends-section">
			<div class="row">
				<h1>Family & Friends</h1>
				<p>This project would also not be possible if not for the support and inspiration of the following. Respect their endeavors:</p>
				<ul class="list-unstyled">
					<li><a href="http://showpaper.org/">Showpaper</a></li>
					<li><a href="http://www.infinitelimbs.com/">Greg Fox</a></li>
					<li><a href="https://www.facebook.com/sosoglos">The So So Glos</a></li>
					<li><a href="http://sischoolofrock.com/">Mike Grande</a></li>
					<li><a href="http://www.toddpnyc.com">Todd P</a></li>
					<li>Joe Ahearn</li>
					<li><a href="http://www.entertainment4every1.net/">Death By Audio</a></li>
					<li><a href="https://www.facebook.com/silentbarn">Silent Barn</a></li>
					<li><a href="http://www.jmcaggregate.tumblr.com/">JMC Aggregate</a></li>
					<li><a href="http://www.newtownradio.com/">Newtown Radio</a></li>
					<li><a href="http://www.wfmu.org">WFMU</a></li>
					<li><a href="http://www.brooklynvegan.com/">Brooklyn Vegan</a></li>
					<li><a href="http://imposemagazine.com/">IMPOSE</a></li>
					<li><a href="http://titusandronicustheband.blogspot.com/">Titus Andronicus LLC</a></li>
					<li><a href="http://www.daytrotter.com/">Daytrotter</a></li>
					<li><a href="http://www.bigsnowbk.tumblr.com/">Big Snow Buffalo Lodge</a></li>
					<li><a href="https://www.facebook.com/285kentave">285 Kent</a></li>
				</ul>
			</div>
		</div>
		
	</div>

	<!-- ARCHIVES PANEL -->
	<div class="col-md-3"></div>

</div>

	
@endsection