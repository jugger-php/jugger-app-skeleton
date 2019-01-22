<?php

return [
	'/blog/{section-code}/{element-code}-{element-id:\d+}' => '/blog/element',
	'/blog/{section-code}' => '/blog/section',
	'/blog' => '/blog/index',
	'/' => '/main/index',
];
