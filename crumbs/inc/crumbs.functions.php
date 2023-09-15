<?php

/**
 * [SEDBY] Crumbs / Functions
 * @package crumbs
 * @author Vladimir Sibirov, Dmitri Beliavski
 * @copyright (c) 2017-2023 seditio.by
 */

defined('COT_CODE') or die('Wrong URL');

function sedby_crumbs($crumbs, $home = true, $title = true) {
	global $R;
	require_once cot_incfile('crumbs', 'plug', 'resources');

	if (Cot::$cfg['plugin']['crumbs']['schema']) {
		$rc_prefix = "schema_crumbs_";
	} else {
		$rc_prefix = "crumbs_";
	}

	$out = cot_rc($rc_prefix . 'open');

	if ($home && $title) {
		array_unshift($crumbs, array(Cot::$cfg['mainurl'], Cot::$L['Home']));
	} elseif ($home && !$title) {
		array_unshift($crumbs, array(Cot::$cfg['mainurl'], Cot::$cfg['maintitle']));
	}
	$cnt = count($crumbs);
	for ($i = 0; $i < $cnt; $i++) {
		if (is_array($crumbs[$i])) {
			$rc_name = ($i == $cnt - 1) ? $rc_prefix . 'item_last' : $rc_prefix . 'item';
			$out .= cot_rc($rc_name, array(
				'url' => (!empty($crumbs[$i][0])) ? $crumbs[$i][0] : '#',
				'title' => htmlspecialchars($crumbs[$i][1], ENT_COMPAT, 'UTF-8', false),
				'number' => $i + 1
			));
		} elseif (is_string($crumbs[$i])) {
			$out .= $crumbs[$i];
		}
	}

	$out .= cot_rc($rc_prefix . 'close');

	return $out;
};
