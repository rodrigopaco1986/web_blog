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
		'resources/js/adminlte/plugins/summernote/summernote-bs4.css',
		'resources/js/adminlte/plugins/sweetalert2/sweetalert2.css',
		'resources/css/adminlte/adminlte.css'
	], 'public/admin/css/default.css')
	.scripts([
		'resources/js/adminlte/plugins/jquery/jquery.js',
		'resources/js/adminlte/plugins/bootstrap/js/bootstrap.bundle.js',
		'resources/js/adminlte/plugins/summernote/summernote-bs4.js',
		'resources/js/adminlte/plugins/sweetalert2/sweetalert2.js',
		'resources/js/adminlte/adminlte.js',
		'resources/js/admin/default.js',
	], 'public/admin/js/default.js')
	.copyDirectory('resources/js/adminlte/plugins/fontawesome-free/webfonts', 'public/admin/webfonts')
	.copyDirectory('resources/js/adminlte/plugins/summernote/font', 'public/admin/css/font')
	.copyDirectory('resources/img/adminlte', 'public/admin/img')
	.copyDirectory('resources/img/favicons', 'public');