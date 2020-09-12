const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
	.styles([
		'resources/js/adminlte/plugins/fontawesome-free/css/all.css',
		'resources/js/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.css',
		'resources/css/adminlte/adminlte.css'
	], 'public/admin/css/default.css')
	.scripts([
		'resources/js/adminlte/plugins/jquery/jquery.js',
		'resources/js/adminlte/plugins/bootstrap/js/bootstrap.bundle.js',
		'resources/js/adminlte/adminlte.js',
	], 'public/admin/js/default.js')
	.copyDirectory('resources/js/adminlte/plugins/fontawesome-free/webfonts', 'public/admin/webfonts')
	.copyDirectory('resources/img/adminlte', 'public/admin/img');