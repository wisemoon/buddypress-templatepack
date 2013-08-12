<?php
/**
 * Group plugins
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php do_action( 'bp_before_group_plugin_template' ); ?>

<div id="plugins-content">

	<?php do_action( 'bp_before_group_body' ); ?>

	<?php do_action( 'bp_template_content' ); ?>

	<?php do_action( 'bp_after_group_body' ); ?>

</div><!-- #item-body -->

<?php do_action( 'bp_after_group_plugin_template' );
