<?php
/* ====================
[BEGIN_COT_EXT]
Code=breadcrumbres
Name=[SEDBY] Crumbs
Category=navigation-structure
Description=Customizable breadcrumbs for the page module
Version=2.10b
Date=2023-09-15
Author=Vladimir Sibirov, Dmitri Beliavski
Copyright=&copy; 2017-2023 Seditio.BY
Notes=
Auth_guests=R
Lock_guests=12345A
Auth_members=RW
Lock_members=12345A
Requires_modules=page
[END_COT_EXT]
[BEGIN_COT_EXT_CONFIG]
extrafields=00:separator:::
extrafield_cat=01:string:::Extrafield for categories
extrafield_pag=02:string:::Extrafield for pages

misc=10:separator:::
what_title=11:radio::1:Use HOME lang string instead of site title
schema=12:radio::1:Use schema.org markup
[END_COT_EXT_CONFIG]
==================== */

/**
 * [SEDBY] Crumbs / Setup
 * @package crumbs
 * @author Vladimir Sibirov, Dmitri Beliavski
 * @copyright (c) 2017-2023 seditio.by
 */

defined('COT_CODE') or die('Wrong URL');
