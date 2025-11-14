<?php
class Vexa_Nav_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {

        $classes     = empty( $item->classes ) ? [] : (array) $item->classes;
        $class_names = join( ' ', array_filter( $classes ) );

        $output .= '<li class="' . esc_attr( $class_names ) . '">';

        $output .= '<a href="' . esc_url( $item->url ) . '" ' .
            'class="text-white hover:text-lime-400 transition flex items-center gap-1">' .
            esc_html( $item->title ) .
            '</a>';

        $output .= '</li>';
    }
}
