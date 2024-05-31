<?php
defined('ABSPATH') || exit;

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRIPPED );
?>
<!-- vision app -->
<div class="vision-root" id="vision-app-settings" style="display:none;">
	<?php require 'page-info.php'; ?>
	<div class="vision-page-header">
		<div class="vision-title"><?php esc_html_e('Vision Settings', 'vision'); ?></div>
	</div>
	<div class="vision-messages" id="vision-messages">
	</div>
	<div class="vision-app">
		<div class="vision-loader-wrap">
			<div class="vision-loader">
				<div class="vision-loader-bar"></div>
				<div class="vision-loader-bar"></div>
				<div class="vision-loader-bar"></div>
				<div class="vision-loader-bar"></div>
			</div>
		</div>
		<div class="vision-wrap">
			<div class="vision-workplace">
				<div class="vision-main-menu">
					<div class="vision-left-panel">
						<div class="vision-list">
							<a class="vision-item vision-small vision-lite" href="https://1.envato.market/getvision" al-if="appData.plan=='lite'"><?php esc_html_e('Buy Pro version', 'vision'); ?></a>
							<a class="vision-item vision-small vision-pro" href="#" al-if="appData.plan=='pro'"><?php esc_html_e('Pro Version', 'vision'); ?></a>
						</div>
					</div>
					<div class="vision-right-panel">
						<div class="vision-list">
							<div class="vision-item vision-blue" al-on.click="appData.fn.saveConfig(appData);" title="<?php esc_html_e('Save config to database', 'vision'); ?>"><?php esc_html_e('Save', 'vision'); ?></div>
						</div>
					</div>
				</div>
				<div class="vision-main-data">
					<div class="vision-stage">
						<div class="vision-main-panel vision-main-panel-general">
							<div class="vision-data vision-active">
								<div class="vision-control">
									<div class="vision-info"><?php esc_html_e('Select the roles which should be able to access the plugin capabilities', 'vision'); ?></div>
								</div>
								
								<div class="vision-control">
									<div al-checkboxlist="appData.config.roles" data-src="appData.roles" data-predefined="administrator"></div>
								</div>
								
								<div class="vision-control">
									<div class="vision-info"><?php esc_html_e('Editor settings', 'vision'); ?></div>
								</div>
								
								<div class="vision-control">
									<div class="vision-helper" title="<?php esc_html_e('Choose a default theme for your custom javascript editor', 'vision'); ?>"></div>
									<div class="vision-label"><?php esc_html_e('JavaScript editor theme', 'vision'); ?></div>
									<select class="vision-select" al-select="appData.config.themeJavaScript">
										<option al-option="null"><?php esc_html_e('default', 'vision'); ?></option>
										<option al-repeat="theme in appData.themes" al-option="theme.id">{{theme.title}}</option>
									</select>
								</div>
								
								<div class="vision-control">
									<div class="vision-helper" title="<?php esc_html_e('Choose a default theme for your custom css editor', 'vision'); ?>"></div>
									<div class="vision-label"><?php esc_html_e('CSS editor theme', 'vision'); ?></div>
									<select class="vision-select" al-select="appData.config.themeCSS">
										<option al-option="null"><?php esc_html_e('default', 'vision'); ?></option>
										<option al-repeat="theme in appData.themes" al-option="theme.id">{{theme.title}}</option>
									</select>
								</div>
								
								<!--
								<div class="vision-control">
									<div class="vision-info"><?php esc_html_e('If you want to fully uninstall the plugin with data, you should delete all items from the database before this action.', 'vision'); ?></div>
								</div>
								
								<div class="vision-control">
									<div class="vision-helper" title="<?php esc_html_e('Delete all book items from database', 'vision'); ?>"></div>
									<div class="vision-button vision-red" al-on.click="appData.fn.deleteAllData(appData, '<?php esc_html_e('Do you really want to delete all data?', 'vision'); ?>');"><?php esc_html_e('Delete all data', 'vision'); ?></div>
								</div>
								-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="vision-modals" class="vision-modals">
		</div>
	</div>
</div>
<!-- /end vision app -->