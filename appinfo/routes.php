<?php
return ['resources' =>
	[
		'noteApi' => ['url' => '/api/v1/notes']
	],
	'routes' => [
    ['name' => 'note#index', 'url' => '/notes', 'verb' => 'GET'],
    ['name' => 'note#show', 'url' => '/notes/{id}', 'verb' => 'GET'],
    ['name' => 'note#create', 'url' => '/notes', 'verb' => 'POST'],
    ['name' => 'note#update', 'url' => '/notes/{id}/edit', 'verb' => 'POST'],
    ['name' => 'note#destroy', 'url' => '/notes/{id}/delete', 'verb' => 'POST'],
		// Main page
		[
			'name' => 'page#index',
			'url' => '/',
			'verb' => 'GET'
		],
		// Share
		[
			'name' => 'share#destroy',
			'url' => '/share/{noteId}',
			'verb' => 'POST'
		],
		// Upload attachments
		[
			'name' => 'AttachmentApi#upload',
			'url' => '/api/v1/attachments',
			'verb' => 'POST'
		],
		// User Settings
		[
			'name' => 'settings#setUserValue',
			'url' => '/setuservalue',
			'verb' => 'POST'
		],
		[
			'name' => 'settings#getUserValue',
			'url' => '/getuservalue',
			'verb' => 'GET'
		]
	]
];
