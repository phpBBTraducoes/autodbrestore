<?php
/**
 *
 * Auto Database Restore. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017, blitze
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_AUTODBRESTORE'			=> 'Auto Database Restore',
	'LOG_AUTODBRESTORE_UPDATED'	=> 'Atualizadas as configurações do Auto Database Restore ',
));
