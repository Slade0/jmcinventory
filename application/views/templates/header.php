<html>
        <head>
                <title>JMC Inventory: <?php echo $title; ?></title>
                <?php echo link_tag('assets/css/default.css'); ?>
        </head>
        <body>
                <h1>JMC Inventory</h1>
                <?php if (isset($menu)) { echo $menu; } ?>
                <h2><?php echo $title; ?></h2>
                <?php echo isset($msg)?heading($msg,3,'class="message"'):''; ?>
