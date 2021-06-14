<?php include_once ('header.php')?>

<section class="section background-white">
    <div class="s-12 m-12 l-4 center">
        <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Delete Image</h4>
        <form name="contactForm" class="customform" method="post" enctype="multipart/form-data">
            <div class="s-12">
                <div class="margin">
                </div>
            </div>
            <div class="s-12">
                <input name="title" class="subject" placeholder="Title" type="text" value="<?=$data['post']->title?>"" required>
                <p class="subject-error form-error">Please enter the title.</p>
            </div>
            <div class="s-12">
                <img src="<?=ROOT. $data['post']->image?>" alt="">
            </div>
            <div class="s-12">
                <input value="<?=$data['post']->description?>" name="description"  class="required message"  placeholder="Your description" rows="3">
                <p class="message-error form-error">Please enter your description.</p>
            </div>
            <div class="s-12">
                <input value="<?=$data['post']->url_address?>" name="url_address"  class="required message"  placeholder="Your description" rows="3">
                <p class="message-error form-error">Please enter your description.</p>
            </div>
            <div class="s-12"><button name="delete" class="s-12 submit-form button background-primary text-white" type="submit">Delete</button></div>
        </form>
    </div>
</section>
<?php include_once ('footer.php')?>
