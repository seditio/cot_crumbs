<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.list.tags
Tags=page.list.tpl:{LIST_CRUMBS}
[END_COT_EXT]
==================== */

/**
 * [SEDBY] Crumbs / Lists
 * @package crumbs
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('crumbs', 'plug');

$cat_fieldname = empty($cfg['plugin']['crumbs']['extrafield_cat']) ? 'title' : $cfg['plugin']['crumbs']['extrafield_cat'];

/* === Hook === */
foreach (cot_getextplugins('crumbs.list.extrafield') as $pl)
{
  include $pl;
}
/* ===== */

$cat_path = cot_structure_buildpath('page', $c, $cat_fieldname);
$t->assign(array(
	'LIST_CRUMBS' => cot_crumbs($cat_path, $cfg['homebreadcrumb'], $cfg['plugin']['crumbs']['what_title'])
));
