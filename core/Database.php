<?php

namespace core;

class Database
{

    public static $version = '1.0';

    function install()
    {
        global $wpdb;
        global $jal_db_version;

        $table_name = $wpdb->prefix . 'campaign_monitor_woocoomerce';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
                                id mediumint(9) NOT NULL AUTO_INCREMENT,
                                time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
                                name tinytext NOT NULL,
                                text text NOT NULL,
                                url varchar(55) DEFAULT '' NOT NULL,
                                UNIQUE KEY id (id)
                            ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);


        Helper::addOption('db_version', self::$version);
    }

    function install_data()
    {
        global $wpdb;

        $welcome_name = 'Mr. WordPress';
        $welcome_text = 'Congratulations, you just completed the installation!';

        $table_name = $wpdb->prefix . 'liveshoutbox';

        $wpdb->insert(
            $table_name,
            array(
                'time' => current_time('mysql'),
                'name' => $welcome_name,
                'text' => $welcome_text,
            )
        );
    }
}