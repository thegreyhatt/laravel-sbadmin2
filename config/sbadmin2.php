<?php

return [

	/*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

	'title' => 'SBAdmin 2',

    'title_prefix' => '',

    'title_postfix' => '',

    
    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want.
    |
    */

    'logo' => 'SB Admin <sup>2</sup>',



    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin
    | colors based on bootstrap background colors:
    | bg-primary, bg-success, bg-info, bg-warning, and bg-danger.
    | Each skin also has a gradient variant:
    | bg-gradient-primary, bg-gradient-success, bg-gradient-info, bg-gradient-warning, and bg-gradient-danger.
    |
    */

    'skin' => 'bg-gradient-primary',


    /*
    |--------------------------------------------------------------------------
    | Topbar Search
    |--------------------------------------------------------------------------
    |
    */

    'topbar-search' => true,


    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout.
    |
    */

    'menu' => [
    	[
    		'text'	=>	'Dashboard',
    		'url'	=>	'/dashboard',
    		'icon'	=>	'fa-tachometer-alt',
    	],
    	'Addons',
    	[
    		'text'		=>	'Pages',
    		'icon'		=>	'fa-folder',
    		'submenu'	=>	[
    			'Login Screens:',
    			[
    				'text'	=>	'Login',
    				'url'	=>	'/login',
    			],
    			[
    				'text'	=>	'Register',
    				'url'	=>	'/register',
    			],
    			'Other Pages:',
    			[
    				'text'	=>	'404 Page',
    				'url'	=>	''
    			],
    			[
    				'text'	=>	'Blank Page',
    				'url'	=>	''
    			],
    		],
    	],
    	[
    		'text'	=>	'Charts',
    		'url'	=>	'/charts',
    		'icon'	=>	'fa-chart-area',
    	],
    	[
    		'text'	=>	'Tables',
    		'url'	=>	'/tables',
    		'icon'	=>	'fa-table',
    	],
    ],

];