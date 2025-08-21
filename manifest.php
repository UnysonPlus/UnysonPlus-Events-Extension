<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']        = __( 'Events', 'fw' );
$manifest['slug']        = 'unysonplus-events';
$manifest['description'] = __( 
	'This extension adds a fully fledged Events module to your theme. It comes with built-in pages that contain a calendar where events can be added.', 
	'fw' 
);

$manifest['version']     = '1.0.15';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Repository Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Events-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Events-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
