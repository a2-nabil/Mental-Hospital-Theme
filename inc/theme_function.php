<?php

// Theme Function
function a2n_customizer_register($wp_customize)
{
    // Header Area Function 
    $wp_customize->add_section(
        'a2n_header_area',
        array(
            'title' => __('Header', 'nabil'),
            'description' => 'You can update your header area.'
        )
    );
    $wp_customize->add_setting(
        'a2n_logo',
        array(
            'default' => get_bloginfo('template_directory') . '/img/logo.png',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'a2n_logo',
            array(
                'label' => 'Logo Upload',
                'description' => 'You can upload your logo here.',
                'setting' => 'a2n_logo',
                'section' => 'a2n_header_area'

            )
        )
    );

    // Menu Position Option
    // $wp_customize->add_section(
    //     'a2n_menu_option',
    //     array(
    //         'title' => __('Menu Position Option', 'nabil'),
    //         'description' => 'You can change your menu position.'
    //     )
    // );
    // $wp_customize->add_setting(
    //     'a2n_menu_position',
    //     array(
    //         'default' => 'right_menu',
    //     )
    // );
    // $wp_customize->add_control(
    //     'a2n_menu_position',
    //     array(
    //         'label' => 'Menu Position',
    //         'description' => 'Select your menu position.',
    //         'setting' => 'a2n_menu_position',
    //         'section' => 'a2n_menu_option',
    //         'type' => 'radio',
    //         'choices' => array(
    //             'left_menu' => 'Left Menu',
    //             'right_menu' => 'Right Menu',
    //             'center_menu' => 'Center Menu'
    //         )
    //     )
    // );

    //  Footer Area Option
    $wp_customize->add_section(
        'a2n_footer_option',
        array(
            'title' => __('Footer', 'nabil'),
            'description' => 'You can change or update your footer position.'
        )
    );
    $wp_customize->add_setting(
        'a2n_copyright_section',
        array(
            'default' => '&copy; Copyright 2023 | Nabil',
        )
    );
    $wp_customize->add_control(
        'a2n_copyright_section',
        array(
            'label' => 'Copyright Text',
            'description' => 'You can update your copyright Text.',
            'setting' => 'a2n_copyright_section',
            'section' => 'a2n_footer_option'
        )
    );

    $wp_customize->add_setting(
        'a2n_copyright_section_logo',
        array(
            'default' => get_bloginfo('template_directory') . '/img/footerFrame.png',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'a2n_copyright_section_logo',
            array(
                'label' => 'Logo Upload',
                'description' => 'You can upload your logo here.',
                'setting' => 'a2n_copyright_section_logo',
                'section' => 'a2n_footer_option'
            )
        )
    );








}
add_action('customize_register', 'a2n_customizer_register');