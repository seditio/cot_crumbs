<?php

/**
 * [SEDBY] Crumbs / Resources
 * @package crumbs
 */

defined('COT_CODE') or die('Wrong URL');

// $R['res_breadcrumbs_open']		= '<ul class="breadcrumb">';
// $R['res_breadcrumbs_item']		= '<li class="breadcrumb-item"><a href="{$url}" title="{$title}">{$title}</a></li>';
// $R['res_breadcrumbs_item_last']	= '<li class="breadcrumb-item">{$title}</li>';
// $R['res_breadcrumbs_close']		= '</ul>';

$R['crumbs_open']      = '<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">';
$R['crumbs_item']      = '<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="{$url}" title="{$title}" itemprop="item"><span itemprop="name">{$title}</span><meta itemprop="position" content="{$number}" /></a></li>';
$R['crumbs_item_last'] = '<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{$title}</span><meta itemprop="position" content="{$number}" /></li>';
$R['crumbs_close']     = '</ul>';
