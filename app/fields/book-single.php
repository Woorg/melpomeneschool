<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', function () {

    Container::make( 'post_meta', __('Book meta', 'sage') )
        ->where( 'post_type' , '=', 'book')
        ->add_fields([
            Field::make( 'text', 'book_year', __( 'Book year' ) ),
            Field::make( 'rich_text', 'book_excerpt', __( 'Book excerpt' ) ),
            Field::make( 'textarea', 'book_publisher', __( 'Book publisher' ) ),

            Field::make( 'text', 'book_button_text', __( 'Book button text' ) ),
            Field::make( 'text', 'book_link', __( 'Book external link' ) )
                ->set_width( 50 ),
            Field::make( 'file', 'book_file', __( 'Book file' ) )
                ->set_width( 50 )
        ]);
});


// Load Carbon Fields

// \Carbon_Fields\Carbon_Fields::boot();
