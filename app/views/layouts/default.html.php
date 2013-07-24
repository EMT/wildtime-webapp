<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!--
	Welcome to the source.
	It's been our pleasure.
	-->

	<title>Wild Time</title>

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/css/style.css">
	<script src="/js/modernizr.js"></script>
</head>
<body>

	<div id="app">
		<header>
			<nav id="menu">
				<a href="#" class="menu-nav-item" data-content-id="content-safety">Safety Tips</a>
				<div class="menu-content-item" id="content-safety">
				
					<h2>Safety</h2>
					<p>It’s fun outdoors, but pay attention and keep your senses alert. Normal health and safety standards apply. But we can’t be responsible for your actions.</p>
					<p>The benefits from being outside are far greater than the odd scratch you might get  but be aware that we hope that you and the kids will (and should) get dirty!</p>
					<p>Good luck!</p>
					
				</div>
				<a href="#" class="menu-nav-item" data-content-id="content-about">About</a>
				<div class="menu-content-item" id="content-about">
				
					<h2>Wild Time</h2>
					<p>We love technology but there are amazing connections to be found outside in nature. So swap some screen time for some Wild Time.</p>
					<p>Find time based wild things for you and your kids to do on your doorstep. Choose how much time you have to spare, find a wild thing to do. Get outside and do it.</p>
					<p>Good luck.</p>
					
					<h2>Project Wild Thing</h2>
					<p>Project Wild Thing is a film led movement to get more kids playing freely outside and re-connecting with the natural world around them.</p>
					<p>Find out more and watch the film at <a href="http://www.projectwildthing.com">www.projectwildthing.com</a></p>
					<p>We are powered by The Wild Network a growing network of charities and organisations committed to tackling the issues raised in the film. www.thewildnetwork.com</p>
				</div>
				<a href="#" class="menu-nav-item" data-content-id="content-credits">Credits</a>
				<div class="menu-content-item" id="content-credits">
					<h2>Credits</h2>
					<p>Born at Good for Nothing, made by <a href="http://swarm.gd">SWARM</a> and <a href="http://madebyfieldwork.com">Fieldwork</a>, and backed by The Wild Network.</p>
					<p>Featuring ideas and activities from:</p>
					<ul>
						<li>National Trust’s 50 things to do before you’re 11 ¾</li>
						<li>RSPB</li>
						<li>The Woodland Trust’s Nature Detectives</li>
						<li>Plant Science</li>
						<li>Royal Horticultural Society</li>
						<li>BBC: Walk like animals</li>
						<li>Babble, Society of the British Isles (Botanical Keys Flora Search)
						<li>TLC Family</li>
						<li>WikiHow</li>
						<li>LIVESTRONG</li>
						<li>Steven Cheshire</li>
						<li>Dan Burgess</li>
					</ul>
				</div>
			</nav>
			<div id="wt-logo"><img src="/img/wt-logo-fuzzy.svg"/></div>
			<a href="#" id="menu-button"><img src="/img/menu-button.svg"/></a>
			<!-- <div id="grass-pattern"></div> -->
		</header>
		
		
		
		
		<div id="content">
			
			<?php echo $this->content(); ?>
			
		</div>
		
		
		
	
	</div><!--app-->
	
	
	
	
	
	
	
	
	<script id="template-links-list" type="text/x-handlebars-template">
		{{#if items.length}}
			<ul class="links-list">
				{{#each items}}
					<li id="timeframe-{{this.id}}"><a data-timeframe-id="{{this.id}}" href="#">{{this.text}}</a></li>
				{{/each}}
			</ul>
		{{/if}}
	</script>
	
	<script id="template-timeframe-back-link" type="text/x-handlebars-template">
		<a href="#" id="back-to-timeframes">Back</a>
	</script>
	
	<script id="template-sub-links-list" type="text/x-handlebars-template">
		{{#if activities.length}}
			<ul class="links-sub-list" id="timeframe-nav-{{id}}">
				{{#each activities}}
					<li id="activity-navitem-{{this.id}}"><a data-activity-id="{{this.id}}" data-timeframe-id="{{this.timeframe_id}}" href="#">{{this.title}}</a></li>
				{{/each}}
			</ul>
		{{/if}}
	</script>
	
	<script id="template-activity-back-link" type="text/x-handlebars-template">
		<a href="#" id="back-to-activities">Back</a>
	</script>
	
	<script id="template-activity-slider" type="text/x-handlebars-template">
		<div class="activity-slider" id="activity-slider-{{timeframe_id}}">{{{activities_html}}}</div>
	</script>
	
	<script id="template-activity" type="text/x-handlebars-template">
		<div class="activity" id="activity-{{id}}">
			<div class="activity-inner">
				<h2>{{title}}</h2>
				{{#if image_url}}
					<figure><img src="{{image_url}}" alt="{{title}}" /></figure>
				{{/if}}
				{{{paragraphs text}}}
				<ul class="share-buttons">
					<li><a href="{{twitterUrl this}}">Share via Twitter</a></li>
					<li><a href="{{facebookUrl this}}">Share via Facebook</a></li>
				</ul>
			</div>
		</div>
	</script>
	
	<script id="template-activity-slider-nav" type="text/x-handlebars-template">
		<a href="#" id="activity-prev">Previous</a>
		<a href="#" id="activity-next">Next</a>
	</script>
	
	
	
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42365061-4', 'projectwildthing.com');
  ga('send', 'pageview');

</script>
	
	
	

	<script src="/js/jquery.min.js"></script>
	<script src="/js/handlebars.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/index.js"></script>
	
	
	
</body>
</html>
