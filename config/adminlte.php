<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'CSOSMA',
    'title_prefix' => 'CSOSMA | ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>CSO </b>San Miguel de Arcangel',
    'logo_img' => 'static/images/logoico.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'CSOSMA',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'admin/inicio',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'text' => 'Inicio',
            'url' => 'admin/inicio',
            'icon' => 'fas fa-home',
            'icon_color' => 'yellow',
            // 'can'  => 'admin.inicio',
        ],
        // [
        //     'type'         => 'navbar-search',
        //     'text'         => 'search',
        //     'topnav_right' => true,
        // ],
        [
            'text' => 'Sede',
            'icon'    => 'fas fa-boxes',
            'route' => 'admin.sedes.getchange',
            'topnav' => true,
            'can'  => 'admin.sedes.index',
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:

        [
            'text' => 'Colaboradores',
            'route' => 'admin.colaboradors.index',
            'icon' => 'far fa-user',
            'icon_color' => 'yellow',
            'can'  => 'admin.colaboradors.index',
            'active' => ['admin/colaboradors','admin/colaboradors/create','admin/colaboradors/*/edit'],
        ],
        [
            'text' => 'Servicios',
            'route' => 'admin.servicios.index',
            'icon' => 'fas fa-address-card',
            'icon_color' => 'yellow',
            'can'  => 'admin.servicios.index',
            'active' => ['admin/servicios','admin/servicios/create','admin/servicios/*/edit'],
        ],

        ['header' => 'VARIOS'],
        // ['header' => 'Tablas del Sistema'],
        
        [
            'text'    => 'Tablas del Sistema',
            'icon'    => 'fas fa-folder-open',
            'icon_color' => 'yellow',
            'can'  => 'admin.tablas',
            'submenu' => [
                [
                    'text' => 'Categor??as',
                    'icon'    => 'fas fa-folder-open',
                    'icon_color' => 'cyan',
                    'route'  => 'admin.categorias.index',
                    'active' => ['admin/categorias','admin/categorias/*','admin/categorias/create'
                                ,'admin/categorias/*/edit'],
                    'can'  => 'admin.categorias.index',
                ],
                [
                    'text' => 'Sedes',
                    'icon'    => 'fas fa-boxes',
                    'icon_color' => 'cyan',
                    // 'url'  => 'admin/usuarios',
                    'route'  => 'admin.sedes.index',
                    'active' => ['admin/sedes/all','admin/sedes/create','admin/sedes/*/edit'],
                    'can'  => 'admin.sedes.index',
                ],
                [
                    'text' => 'Doctores',
                    'icon'    => 'fas fa-user-md',
                    'icon_color' => 'cyan',
                    // 'url'  => 'admin/usuarios',
                    'route'  => 'admin.doctors.index',
                    'active' => ['admin/doctors/all','admin/doctors/1','admin/doctors/2','admin/doctors/create'
                                ,'admin/doctors/*/edit'],
                    'can'  => 'admin.doctors.index',
                ],
                [
                    'text' => 'Clientes',
                    'icon'    => 'fab fa-creative-commons-by',
                    'icon_color' => 'cyan',
                    // 'url'  => 'admin/usuarios',
                    'route'  => 'admin.clientes.index',
                    'active' => ['admin/clientes/all','admin/clientes/create','admin/clientes/*/edit'],
                    'can'  => 'admin.clientes.index',
                ],
                [
                    'text' => 'Usuarios',
                    'icon'    => 'fas fa-user-friends',
                    'icon_color' => 'cyan',
                    // 'url'  => 'admin/usuarios',
                    'route'  => 'admin.usuarios.index',
                    'active' => ['admin/usuarios/all','admin/usuarios/1','admin/usuarios/2','admin/usuario/create'
                                ,'admin/usuario/*/edit','admin/usuario/*/editpermission'],
                    'can'  => 'admin.usuarios.index',
                ],
                [
                    'text' => 'Roles',
                    'icon'    => 'fas fa-cog',
                    'icon_color' => 'cyan',
                    'route'  => 'admin.roles.index',
                    'active' => ['admin/roles/index','admin/roles/create','admin/roles/*/edit'],
                    'can'  => 'admin.roles.index',
                ],
                [
                    'text'    => 'Laboratorio',
                    'icon'    => 'fas fa-folder-open',
                    'icon_color' => 'yellow',
                    'can'  => 'admin.tablas',
                    'submenu' => [
                        [
                            'text' => 'Pruebas Bioqu??mica',
                            'icon'    => 'fas fa-microscope',
                            'icon_color' => 'cyan',
                            'route'  => 'admin.pruebas.index',
                            'active' => ['admin/pruebas/index','admin/pruebas/create','admin/pruebas/*/edit'],
                            'can'  => 'admin.pruebas.index',
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Utilitarios',
            'icon'    => 'fas fa-cogs',
            'icon_color' => 'yellow',
            'can'  => 'admin.util',
            'submenu' => [
                [
                    'text' => 'Par??metros',
                    'icon'    => 'fas fa-cog',
                    'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                [
                    'text' => 'Import',
                    'icon'    => 'fas fa-cog',
                    'icon_color' => 'cyan',
                    'route'  => 'admin.imports.index',
                    'can'  => 'admin.imports.index',
                ],
                [
                    'text' => 'Permisos Faltantes',
                    'icon'    => 'fas fa-cog',
                    'icon_color' => 'cyan',
                    'route'  => 'admin.permisosfaltantes',
                    'can'  => 'admin.imports.index',
                ],
            ],
        ],
 
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/select2/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2/css/select2.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/chart.js/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/sweetalert2/sweetalert2.all.min.js',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];
