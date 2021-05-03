<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', function () {

    Container::make('post_meta', __('Book meta', 'sage'))
        ->where('post_type', '=', 'post')
        ->add_fields([
            Field::make('textarea', 'book_subtitle', __('Book subtitle'))
                ->set_rows($rows = 2),
            Field::make('textarea', 'book_characters', __('Book characters')),
            // Field::make( 'text', 'book_year', __( 'Book year' ) ),
            // Field::make( 'rich_text', 'book_excerpt', __( 'Book excerpt' ) ),

            // Field::make( 'text', 'book_link', __( 'Book external link' ) )
            Field::make('text', 'book_button_text', __('Book button text'))
                ->set_width(50)
                ->set_attribute('placeholder', 'Завантажити сценарій'),
            Field::make('file', 'book_file', __('Book file'))
                ->set_width(50)
                ->set_value_type('url')
        ]);
});


// Load Carbon Fields

// \Carbon_Fields\Carbon_Fields::boot();
