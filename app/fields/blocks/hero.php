<?php
    use Carbon_Fields\Block;
    use Carbon_Fields\Field;

    add_action( 'carbon_fields_register_fields', function () {
        Block::make( __( 'Hero block' ) )
            ->add_fields([
                Field::make( 'text', 'title', __( 'Hero title' ) ),
                Field::make( 'rich_text', 'text', __( 'Hero text' ) ),
            ])

            ->set_category( 'custom', __( 'Custom blocks' ), 'admin-page' )

            ->set_inner_blocks( true )
            ->set_inner_blocks_position( 'below' )

            ->set_render_callback( function ( $arg ) {
                 return get_block_template('hero', $arg);
            });

    });
