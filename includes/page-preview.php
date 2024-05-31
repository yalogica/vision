<?php
defined('ABSPATH') || exit;

global $wp_version;
$jquery_js_src = site_url("/wp-admin/load-scripts.php?c=1&load[]=jquery-core,jquery-migrate,utils&ver={$wp_version}");

$plugin_url = plugin_dir_url(dirname(__FILE__));
$preview_css_src = $plugin_url . 'assets/css/preview.min.css?ver=' . VISION_PLUGIN_VERSION;
$preview_js_src = $plugin_url . 'assets/js/preview.min.js?ver=' . VISION_PLUGIN_VERSION;
$loader_js_src = $plugin_url . 'assets/js/loader.min.js?ver=' . VISION_PLUGIN_VERSION;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url($preview_css_src); ?>">
    <script type="text/javascript" src="<?php echo esc_url($jquery_js_src); ?>"></script>
    <script type="text/javascript" src="<?php echo esc_url($preview_js_src); ?>"></script>
    <script type="text/javascript">
        const vision_globals = <?php echo json_encode($this->getLoaderGlobals($this->vision_map_version)); ?>;
    </script>
    <script type="text/javascript" src="<?php echo esc_url($loader_js_src); ?>"></script>
</head>
<body>
<div class="vision-preview-wrap">
	<div class="vision-preview-header">
		<div class="vision-preview-btn vision-preview-image" data-device="image" title="original image size"></div>
		<div class="vision-preview-btn vision-preview-desktop" data-device="desktop" title="desktop"></div>
		<div class="vision-preview-btn vision-preview-tablet" data-device="tablet" title="tablet"></div>
		<div class="vision-preview-btn vision-preview-mobile" data-device="mobile" title="mobile"></div>
	</div>
	<div class="vision-preview-workspace">
		<div id="vision-preview-canvas" class="vision-preview-canvas">
			<?php
                $atts = ['id' => $this->vision_map_id];
                echo $this->shortcode($atts);
            ?>
		</div>
	</div>
</div>
</body>
</html>