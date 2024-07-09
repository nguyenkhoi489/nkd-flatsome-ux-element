<?php


add_action('init', function () {
    register_post_type('project', array(
        'labels' => array(
            'name' => 'Project',
            'singular_name' => 'Project',
            'menu_name' => 'Project',
            'all_items' => 'All Project',
            'edit_item' => 'Edit Project',
            'view_item' => 'View Project',
            'view_items' => 'View Project',
            'add_new_item' => 'Add New Project',
            'add_new' => 'Add New Project',
            'new_item' => 'New Project',
            'parent_item_colon' => 'Parent Project:',
            'search_items' => 'Search Project',
            'not_found' => 'No Project found',
            'not_found_in_trash' => 'No Project found in Trash',
            'archives' => 'Project Archives',
            'attributes' => 'Project Attributes',
            'insert_into_item' => 'Insert into Project',
            'uploaded_to_this_item' => 'Uploaded to this Project',
            'filter_items_list' => 'Filter Project list',
            'filter_by_date' => 'Filter Project by date',
            'items_list_navigation' => 'Project list navigation',
            'items_list' => 'Project list',
            'item_published' => 'Project published.',
            'item_published_privately' => 'Project published privately.',
            'item_reverted_to_draft' => 'Project reverted to draft.',
            'item_scheduled' => 'Project scheduled.',
            'item_updated' => 'Project updated.',
            'item_link' => 'Project Link',
            'capability_type'     => 'page',
            'item_link_description' => 'A link to a Project.',
        ),
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array(
            0 => 'title',
            1 => 'editor',
            2 => 'thumbnail'
        ),
        'delete_with_user' => false,
    ));
});


function some_hook_function()
{
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), time(), 'all' );
}
add_action('admin_enqueue_scripts', 'some_hook_function');
