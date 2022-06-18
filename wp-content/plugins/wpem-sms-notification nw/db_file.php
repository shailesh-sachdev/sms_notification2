<?php
function create_db(){
    global $wpdb;

    $db_tb_name = $wpdb->prefix . "twilio_credentials";

    $db_query="CREATE TABLE $db_tb_name(
        id int(10) NOT NULL AUTO_INCREMENT,
        final_output text DEFAULT'',
        PRIMARY KEY (id)
        )";

require_once(ABSPATH . "wp-admin/includes/upgrade.php");
dbDelta( $db_query );
}


function create_table(){
    global $wpdb;
    $table_name = $wpdb->prefix.'twilio_credentials';

    $db_query = "CREATE TABLE $table_name(
        id int(10) NOT NULL AUTO_INCREMENT,
        sid text DEFAULT'',
        auth text DEFAULT'',

        PRIMARY KEY (id)
    )";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta( $db_query);
}
?>