<?php
$metabox_option[] = array(
    'id'        => '_events',
    'title'     => esc_html__('Address', 'charitoki'),
    'post_type' => 'events',
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

        // begin section
        array(
            'name'   => esc_html__('Address option', 'charitoki'),
            'icon'   => 'fa fa-wifi',
            'fields' => array(

                array(
                    'id'      => 'address',
                    'type'    => 'text',
                    'title'   => esc_html('Address Field','charitoki'),
                    'default' => '244 Fletcher Dr, Gainesville, FL 32603',
                ),

            ),
        ),
    ),
);
