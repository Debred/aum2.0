<?php
function fjbs_post_types()
{

    $labels1 = array(
        'name' => _x('Asociados', 'Post Type General Name', 'fjbs'),
        'singular_name' => _x('Asociado', 'Post Type Singular Name', 'fjbs'),
        'menu_name' => __('Asociados', 'fjbs'),
        'name_admin_bar' => __('Asociado', 'fjbs'),
        'archives' => __('Archivo', 'fjbs'),
        'attributes' => __('Atributos', 'fjbs'),
        'parent_item_colon' => __('Asociado Padre', 'fjbs'),
        'all_items' => __('Todos Los Asociados', 'fjbs'),
        'add_new_item' => __('Agregar Asociado', 'fjbs'),
        'add_new' => __('Agregar Asociado', 'fjbs'),
        'new_item' => __('Nuevo Asociado', 'fjbs'),
        'edit_item' => __('Editar Asociado', 'fjbs'),
        'update_item' => __('Actualizar Asociado', 'fjbs'),
        'view_item' => __('Ver Asociado', 'fjbs'),
        'view_items' => __('Ver Asociados', 'fjbs'),
        'search_items' => __('Buscar Asociado', 'fjbs'),
        'not_found' => __('No Encontrado', 'fjbs'),
        'not_found_in_trash' => __('No Encontrado en Papelera', 'fjbs'),
        'featured_image' => __('Imagen Destacada', 'fjbs'),
        'set_featured_image' => __('Guardar Imagen destacada', 'fjbs'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'fjbs'),
        'use_featured_image' => __('Utilizar como Imagen Destacada', 'fjbs'),
        'insert_into_item' => __('Insertar en Asociado', 'fjbs'),
        'uploaded_to_this_item' => __('Agregado en Asociado', 'fjbs'),
        'items_list' => __('Lista de Asociados', 'fjbs'),
        'items_list_navigation' => __('Navegación de Asociados', 'fjbs'),
        'filter_items_list' => __('Filtrar Asociados', 'fjbs'),
    );


    $args1 = array(
        'label' => __('Asociado', 'fjbs'),
        'description' => __('Asociados de la Fundación', 'fjbs'),
        'labels' => $labels1,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'post-formats'),
        'taxonomies' => array('post_tag', 'categoriasociados'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-groups',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => 'fjbs-asociados',
        'rewrite'  =>  array('slug' => 'fjbs-asociados', 'with_front' => 'false'),
        'query_var' => 'fjbs_asociados',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'asociado',
        'show_in_rest' => true,
        'rest_base' => 'fjbs-asociados-api',
        'capabilities' => [
            'edit_post'          => 'edit_asociado',
            'read_post'          => 'read_asociado',
            'delete_post'        => 'delete_asociado',
            'edit_posts'         => 'edit_asociados',
            'edit_others_posts'   => 'edit_others_asociados',
            'publish_posts'      => 'publish_asociados',
            'read_private_posts'  => 'read_private_asociados',
            'create_posts'       => 'edit_asociados',
        ]
    );

    register_post_type('fjbs_asociados', $args1);
}
add_action('init', 'fjbs_post_types', 0);

?>