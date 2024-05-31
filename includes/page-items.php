<?php
defined('ABSPATH') || exit;

$list_table = new Vision_List_Table_Items();
$list_table->prepare_items();
?>
<!-- vision app -->
<div class="vision-root" id="vision-app-items">
	<?php require 'page-info.php'; ?>
	<div class="vision-page-header">
		<div class="vision-title"><?php esc_html_e('Vision Items', 'vision'); ?></div>
		<div class="vision-actions">
			<a class="vision-blue" href="?page=vision_item" title="<?php esc_html_e('Create a new item', 'vision'); ?>"><?php _e('Add Item', 'vision'); ?></a>
		</div>
	</div>
	<div class="vision-app">
		<?php $list_table->views(); ?>
		<form method="post">
			<?php $list_table->search_box(esc_html__('Search Items', 'vision'),'item'); ?>
			<input type="hidden" name="page" value="<?php echo sanitize_key(filter_var($_REQUEST['page'], FILTER_DEFAULT)) ?>">
			<?php $list_table->display() ?>
		</form>
	</div>
</div>
<!-- /end vision app -->