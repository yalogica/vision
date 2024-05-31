<?php
defined('ABSPATH') || exit;

if(!class_exists('Vision_Activator')) :

class Vision_Activator {
	public function activate() {
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		
		global $wpdb;
		
		$table = $wpdb->prefix . VISION_PLUGIN_NAME;
		$sql = "CREATE TABLE {$table} (
			id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
			title text DEFAULT NULL,
			slug varchar(200) DEFAULT NULL,
			active tinyint NOT NULL DEFAULT 1,
			data longtext DEFAULT NULL,
			config longtext DEFAULT NULL,
			author bigint(20) UNSIGNED NOT NULL DEFAULT 0,
			editor bigint(20) UNSIGNED NOT NULL DEFAULT 0,
			deleted tinyint NOT NULL DEFAULT 0,
			created datetime NOT NULL,
			modified datetime NOT NULL,
			UNIQUE KEY id (id)
		)
		CHARACTER SET utf8mb4,
		COLLATE utf8mb4_unicode_ci;";
		dbDelta($sql);

		update_option('vision_db_version', VISION_DB_VERSION, false);
		
		$this->update_data();
		if(get_option('vision_activated') == false ) {
			$this->install_data();
		}
		update_option('vision_activated', time(), false);
	}
	
	public function update_data() {
		global $wpdb;
		$table = $wpdb->prefix . VISION_PLUGIN_NAME;

		$sql = $wpdb->prepare("UPDATE {$table} SET editor=author WHERE editor=%d", 0);
		$wpdb->query($sql);
		
		// modify field types
		$wpdb->query("ALTER TABLE {$table} MODIFY data LONGTEXT");
		$wpdb->query("ALTER TABLE {$table} MODIFY config LONGTEXT");
		
		// Add support Emoji
		$sql = "ALTER TABLE {$table} DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
		$wpdb->query($sql);
		
		$sql = "ALTER TABLE {$table} MODIFY title text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
		$wpdb->query($sql);
		
		$sql = "ALTER TABLE {$table} MODIFY data longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
		$wpdb->query($sql);
		
		$sql = "ALTER TABLE {$table} MODIFY config longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
		$wpdb->query($sql);
		
		$sql = "ALTER TABLE {$table} MODIFY slug varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
		$wpdb->query($sql);
		
		// Add the new column 'deleted'
		$row = $wpdb->get_results($wpdb->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name=%s AND column_name='deleted'", $table));
		if(empty($row)){
			$sql = "ALTER TABLE {$table} ADD deleted tinyint NOT NULL DEFAULT 0";
			$wpdb->query($sql);
		}
	}
	
	public function install_data() {
	}
	
	public function check_db() {
		if(get_option('vision_db_version') != VISION_DB_VERSION ) {
			$this->activate();
		}
	}
}

endif;