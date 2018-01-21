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
	'AUTO_REFRESH'				=> 'Atualização automática para executar o cron?',
	'ACP_SETTING_SAVED'			=> 'suas configurações foram salvas',
	'CREATE_NEW_BACKUP'			=> 'Criar novo backup',
	'RESTORE_CUSTOM'			=> 'personalizadas',
	'RESTORE_FREQUENCY_0'		=> 'Desativado',
	'RESTORE_FREQUENCY_15'		=> 'A cada 15 minutos',
	'RESTORE_FREQUENCY_30'		=> 'A cada 30 minutos',
	'RESTORE_FREQUENCY_60'		=> 'A cada hora',
	'SELECT_FREQUENCY'			=> 'Selecione a freqüência de restauração',
	'SHOW_RESTORE_NOTICE'		=> 'Mostrar aviso na primeira página?',
));
