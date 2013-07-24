<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;
use lithium\storage\Cache;


class ActivitiesController extends \lithium\action\Controller {

	public function view() {
		$url = 'http://wtapi.madebyfieldwork.com/activities/view/' . $this->request->id . '.json';
		$activity = Cache::read('default', md5($url));
		if (!$activity) {
			$activity = file_get_contents($url);
			Cache::write('default', md5($url), $activity, '+2 days');
		}
		$activity = json_decode($activity)->activity;
		return compact('activity');
	}

}

?>