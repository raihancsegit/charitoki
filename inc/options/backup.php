<?php
/**
 * Backup
 */
$charitoki_options[] = array(
    'name'   => 'backup',
    'title'  => esc_html__( 'Backup', 'charitoki' ),
    'icon'   => 'fa fa-suitcase',
    'fields' => array(
        array(
            'id'    => 'backup',
            'type'  => 'backup',
            'title' => esc_html__( 'Backup Options', 'charitoki' ),
            )
        )
    );