<?php
/**
 * The View Page for Orbit Fox Modules.
 *
 * @link       https://themeisle.com
 * @since      1.0.0
 *
 * @package    Orbit_Fox
 * @subpackage Orbit_Fox/app/views
 * @codeCoverageIgnore
 */

if ( ! isset( $no_modules ) ) {
	$no_modules = true;
}

if ( ! isset( $empty_tpl ) ) {
	$empty_tpl = '';
}

if ( ! isset( $count_modules ) ) {
	$count_modules = 0;
}

if ( ! isset( $tiles ) ) {
	$tiles = '';
}

if ( ! isset( $toasts ) ) {
	$toasts = '';
}

if ( ! isset( $panels ) ) {
	$panels = '';
}
?>
<div class="obfx-wrapper obfx-header">
	<div class="obfx-header-content">
		<img src="<?php echo OBFX_URL; ?>/images/orbit-fox.png" title="Orbit Fox" class="obfx-logo"/>
		<h1><?php echo __( 'Orbit Fox Companion', 'themeisle-companion' ); ?></h1><span class="powered"> by <a
					href="https://themeisle.com" target="_blank"><b>ThemeIsle</b></a></span>
	</div>
</div>
<div id="obfx-wrapper" style="padding: 0; margin-top: 10px; margin-bottom: 5px;">
	<?php
	echo $toasts;
	?>
</div>
<div class="obfx-wrapper" id="obfx-modules-wrapper">
	<?php
	if ( $no_modules ) {
		echo $empty_tpl;
	} else {
		?>
		<div class="panel">
			<div class="panel-header text-center">
				<div class="panel-title mt-10"><?php echo __( 'Available Modules', 'themeisle-companion' ); ?></div>
			</div>
			<div class="panel-body">
				<?php echo $tiles; ?>
			</div>
			<div class="panel-footer">
				<!-- buttons or inputs -->
			</div>
		</div>
		<div class="panel">
			<div class="panel-header text-center">
				<div class="panel-title mt-10"><?php echo __( 'Activated Modules Options', 'themeisle-companion' ); ?></div>
			</div>
			<?php echo ( $panels == '' ) ? '<p class="text-center">' . __( 'No modules activated.', 'themeisle-companion' ) . '</p>' : $panels; ?>
		</div>
		<?php
	}
	?>
</div>
