<?php
defined('ABSPATH') || exit;

$data = '';
$data .= '<div class="vision-page-info">' . PHP_EOL;
$data .= '<p>' . __('This is the <b>LITE version</b> of the plugin.', 'vision') . '</p>' . PHP_EOL;
$data .= '<p>' . __('It has only one limitation. You can create and use only <b>one item</b>.', 'vision') . '</p>' . PHP_EOL;
$data .= '<div class="vision-page-info-close"><i class="fa fa-times"></i></div>' . PHP_EOL;
$data .= '</div>' . PHP_EOL;
echo wp_kses_post($data);

?>
