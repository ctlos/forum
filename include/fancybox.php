<?php

/**
 * Copyright (C) 2011-2015 Visman (mio.visman@yandex.ru)
 * License: http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 */

if (!defined('PUN'))
	exit;

if (isset($pun_config['o_fbox_files']) && !isset($http_status) && (!$pun_user['is_guest'] || !empty($pun_config['o_fbox_guest'])))
{
	if (strpos(','.$pun_config['o_fbox_files'], ','.basename($_SERVER['PHP_SELF'])) !== false || (!empty($plugin) && strpos(','.$pun_config['o_fbox_files'], ','.$plugin) !== false))
	{
		if (!isset($page_head))
			$page_head = array();

		$page_head['fancyboxcss'] = '<link rel="stylesheet" type="text/css" href="style/imports/fancybox.css" />';

		if (!isset($page_js))
		{
			$page_head['jquery'] = '<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
			$page_head['fancybox'] = '<script type="text/javascript" src="js/fancybox.js"></script>';
		}
		else // For FluxBB by Visman
		{
			$page_js['j'] = 1;
			$page_js['f']['fancybox'] = 'js/fancybox.js';
		}
	}
}
