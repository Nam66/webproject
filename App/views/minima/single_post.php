<?php include_once('header.php')?>
    <section class="section background-white">
<?php check_message();?>
    <div class="s-12 m-12 l-4 center">
        <h4 class="text-size-20 margin-bottom-20 text-dark text-center"><?=$data['post']->title?></h4>
        <img src="<?=ROOT. $data['post']->image?>">
        <h1><?=$data['post']->description?></h1>
    </div>
    </section>
<?php include_once('footer.php') ?>
