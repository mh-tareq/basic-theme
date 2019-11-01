<!DOCTYPE html>
<html>
<title><?php bloginfo('title') ?></title>
<meta charset="<?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<body <?php body_class('w3-light-grey') ?>>

    <!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>
                    <a class='site__home' href="<?php bloginfo('home') ?>"><?php bloginfo('name') ?></a>
                </b></h1>
            <p><?php bloginfo('description') ?> <span class="w3-tag"><?php bloginfo('name') ?></span></p>
            <?php wp_head() ?>
        </header>