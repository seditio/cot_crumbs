<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.tags
Tags=page.tpl:{PAGE_CRUMBS}
[END_COT_EXT]
==================== */

/**
 * [SEDBY] Crumbs / Pages
 * @package crumbs
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('crumbs', 'plug');

$pag_fieldname = empty($cfg['plugin']['crumbs']['extrafield_pag']) ? 'title' : $cfg['plugin']['crumbs']['extrafield_pag'];
$cat_fieldname = empty($cfg['plugin']['crumbs']['extrafield_cat']) ? 'title' : $cfg['plugin']['crumbs']['extrafield_cat'];

/* === Hook === */
foreach (cot_getextplugins('crumbs.page.extrafield') as $pl)
{
  include $pl;
}
/* ===== */

$pag_path = cot_structure_buildpath('page', $pag['page_cat'], $cat_fieldname);
$pag_crumbs[] = array($pag['page_pageurl'], $pag['page_'.$pag_fieldname]);
$t->assign(array(
  'PAGE_CRUMBS' => cot_crumbs(array_merge($pag_path, $pag_crumbs), $cfg['homebreadcrumb'], $cfg['plugin']['crumbs']['what_title'])
));
