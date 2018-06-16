<?php
/**
 * Adiciona metabox na página inicial
 *
 * @package Odin
 * @since 2.2.0
 */
function add_home_metabox() {
    global $post;

    if ( 'page' != get_option( 'show_on_front') ) {
        return;
    }

    remove_post_type_support( 'page', 'editor' );
    $front_page_id = get_option( 'page_on_front' );

    $home_metabox = new Odin_Metabox(
        'home-info',
        'Informações da página',
        'page',
        'normal',
        'high'
    );

    $home_metabox->set_fields(
        array(
            array(
                'id' => '_o_projeto',
                'label' => __( 'O Projeto', 'odin' ),
                'type' => 'editor',
            ),
            array(
                'id' => '_realizacao',
                'label' => __( 'Realização', 'odin' ),
                'type' => 'editor',
            ),
        )
    );
}
add_action( 'init', 'add_home_metabox', 1 );

/**
 * Adiciona metabox na página de realizadores
 *
 * @package Odin
 * @since 2.2.0
 */
function add_realizacao_metabox() {
    $realizadores_metabox = new Odin_Metabox(
        'realizadores-info',
        'Dados dos realizadores',
        'realizador',
        'normal',
        'high'
    );

    $realizadores_metabox->set_fields(
        array(
            array(
                'id' => '_colaborou_com',
                'label' => __( 'Calaborou com', 'odin' ),
                'type' => 'text',
            ),
        )
    );
}
add_action( 'init', 'add_realizacao_metabox', 1 );