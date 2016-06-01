 <?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-monument';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = '2';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = '3';

	// Assign Locations for Generic Footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// This theme doesn't have a Call To Action.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#585e6b',
				'#2d3037',
				'#18191a',
				'#ff000a',
				'#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#0f314c',
				'#63899b',
				'#222222',
				'#3390af',
				'#656b62',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#d6c5ad',
				'#5e544f',
				'#00827d',
				'#27516d',
				'#8b7a5e',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#dbd9b7',
				'#717775',
				'#272f49',
				'#949a8e',
				'#615566',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#006599',
				'#969696',
				'#571b3c',
				'#c15157',
				'#341931',
			)
		),
	);

		$widget_markup['call-to-action'] = <<<HTML
		<div class="col-sm-12 col-md-12">
			<div class="call-to-action">
				<h1>Monument</h1>
					<p class="p-button-primary"><a class="button-primary" href="contact-us">Request a Quote Today</a></p>
			</div>
		</div>
HTML;

	// Add CTA to Widget 2
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-2'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Cinzel';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Cinzel';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Icons
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Site Title";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Above Content Area";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Below Primary Menu";

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Content Area';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Cinzel';
	$controls['logo_font_size']['default'] = 32;
	$controls['logo_margin_top']['default'] = 5;
	$controls['logo_text_transform']['default'] = 'none';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );

function boldgrid_container_wrap_top1() {
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="sidebar">
	<?php
}
add_action( 'boldgrid_header_before', 'boldgrid_container_wrap_top1', 30 );

function boldgrid_container_wrap_bottom() {
	?>
</div>
</div>
	<?php
}
add_action( 'boldgrid_header_after', 'boldgrid_container_wrap_bottom' );

function boldgrid_body_wrap_top() {
	?>
	<div class="col-md-9 full-width">
	<?php
}
add_action( 'boldgrid_content_before', 'boldgrid_body_wrap_top' );

function boldgrid_body_wrap_bottom() {
	?>
</div>
		</div>
	<?php
}
add_action( 'boldgrid_footer_after', 'boldgrid_body_wrap_bottom' );
