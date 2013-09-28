<?php

/*
 * This file is part of the PRONTO core.
 *
 * (c) Thomas Rasshofer <tr@prontocms.com>
 *
 * For the full copyright and license information, please view http://prontocms.com/license.
 */

/**
 * Load required components
 */
foreach (array(
	'container',
	'collection',
	'config',
	'globals',
	'default',
	'file',
	'image',
	'files',
	'content',
	'helper',
	'page',
	'pages',
	'template',
	'markdown',
	'markdown-extra',
	'shortcodes'
) as $file) {
	require_once(PRONTO_CORE.DS.$file.'.php');
}

?>