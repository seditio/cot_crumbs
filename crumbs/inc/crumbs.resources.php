<?php

/**
 * [SEDBY] Crumbs / Resources
 * @package crumbs
 * @author Vladimir Sibirov, Dmitri Beliavski
 * @copyright (c) 2017-2023 seditio.by
 */

defined('COT_CODE') or die('Wrong URL');

$R['crumbs_open']      = '<ul class="breadcrumb">';
$R['crumbs_item']      = '<li class="breadcrumb-item"><a href="{$url}" title="{$title}">{$title}</a></li>';
$R['crumbs_item_last'] = '<li class="breadcrumb-item">{$title}</li>';
$R['crumbs_close']     = '</ul>';

$R['schema_crumbs_open']      = '<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">';
$R['schema_crumbs_item']      = '<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="{$url}" title="{$title}" itemprop="item"><span itemprop="name">{$title}</span><meta itemprop="position" content="{$number}" /></a></li>';
$R['schema_crumbs_item_last'] = '<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{$title}</span><meta itemprop="position" content="{$number}" /></li>';
$R['schema_crumbs_close']     = '</ul>';
