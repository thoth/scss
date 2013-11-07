<?php

CroogoNav::add('settings.children.scss', array(
	'title' => 'SCSS',
	'url' => array(
		'admin' => true,
		'plugin' => 'settings',
		'controller' => 'settings',
		'action' => 'prefix',
		'SCSS',
	),
));