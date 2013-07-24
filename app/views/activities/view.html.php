
	<?php $this->title($activity->title . ' – Wildtime'); ?>


	<div class="activity-slider" id="activity-slider-<?= $activity->timeframe_id; ?>">
		<div class="activity" id="activity-<?= $activity->id; ?>">
			<div class="activity-inner">
				<h2><?= $activity->title; ?></h2>
				<?php if ($activity->image_url) { ?>
					<figure><img src="<?= $activity->image_url; ?>" alt="<?= $activity->title; ?>" /></figure>
				<?php } ?> 
				<div class="activity-text">
					<p><?php echo str_replace("\n", '</p><p>', str_replace("v\n\r", "\n", $activity->text)); ?></p>
					<p><a href="https://itunes.apple.com/gb/app/wild-time/id658430256?mt=8&uo=4" target="itunes_store"><img src="http://r.mzstatic.com/images/web/linkmaker/badge_appstore-lrg.gif" alt="Wild Time - Fieldwork" style="border: 0;"/></a></p>
				
					<ul class="share-buttons">
						<li><a href="https://twitter.com/intent/tweet?text=<?= rawurlencode('I just did ' . $activity->title . ' #projectwildthing #wildtime') . '&related=wearewildthing&url=' . rawurlencode('http://wildtime.projectwildthing.com/activities/' . $activity->id); ?>">Share via Twitter</a></li>
						<li><a href="https://www.facebook.com/dialog/feed?picture=<?= rawurlencode($activity->image_url) . '&name=' . rawurlencode('I just did ' . $activity->title . ' #projectwildthing #wildtime') . '&link=' . rawurlencode('http://wildtime.projectwildthing.com/activities/' . $activity->id) . '&app_id=121611894712240&redirect_uri=' . rawurlencode('http://wildtime.projectwildthing.com/activities/' . $activity->id); ?>">Share via Facebook</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>