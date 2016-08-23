<?php

/*
 * This file is part of the TYPO3 CMS Extension "t3extensions"
 * Extension author: Michael Schams - https://schams.net
 *
 * For copyright and license information, please read the LICENSE.txt
 * file distributed with this source code.
 *
 * @package		TYPO3
 * @subpackage	t3extensions
 * @author		Michael Schams <schams.net>
 * @link		https://schams.net
 */

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TYPO3 Tutorial Layout to Website',
	'description' => 'TYPO3 Extensions',
	'category' => 'misc',
	'version' => '1.0.0',
	'module' => '',
	'state' => 'beta',
	'createDirs' => '',
	'clearcacheonload' => 0,
	'author' => 'Michael Schams (schams.net)',
	'author_email' => 'schams.net',
	'author_company' => 'https://schams.net',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	)
);