<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
/* header for page */
if (function_exists('vexa_header_layout')) {
    vexa_header_layout();
} else {
    get_template_part('inc/header/header', 'default');
}
?>