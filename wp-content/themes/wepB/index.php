<!DOCTYPE html>
<!-- language_attributes() know and show website yerg use language what-->
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- thenh jeh pi tilte in wordpress yerg -->
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
    <header>
        <div class="container">
            <h1>
                <?php
                 bloginfo('name');
                 ?>
            </h1>
        </div>
        <h1>hello world</h1>
    </header>
</body>
</html>