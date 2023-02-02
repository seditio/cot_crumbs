<?php

/**
 * [SEDBY] Crumbs / Functions
 * @package crumbs
 */

defined('COT_CODE') or die('Wrong URL');

function cot_crumbs($crumbs, $home = true, $title = true) {
	global $cfg, $R, $L;
	require_once cot_incfile('crumbs', 'plug', 'resources');

	$tmp = $R['crumbs_open'];
	if ($home && $title) {
		array_unshift($crumbs, array($cfg['mainurl'], $L['Home']));
	} elseif ($home && !$title) {
		array_unshift($crumbs, array($cfg['mainurl'], $cfg['maintitle']));
	}
	$cnt = count($crumbs);
	for ($i = 0; $i < $cnt; $i++) {
		if (is_array($crumbs[$i])) {
			$rc_name = ($i == $cnt - 1) ? 'crumbs_item_last' : 'crumbs_item';
			$tmp .= cot_rc($rc_name, array(
				'url' => (!empty($crumbs[$i][0])) ? $crumbs[$i][0] : '#',
				'title' => htmlspecialchars($crumbs[$i][1], ENT_COMPAT, 'UTF-8', false),
				'number' => $i + 1
			));
		} elseif (is_string($crumbs[$i])) {
			$tmp .= $crumbs[$i];
		}
	}
	$tmp .= $R['crumbs_close'];
	return $tmp;
};
