<?php include_once('header.php')?>
<section class="section background-white">
    <?php check_message();?>
    <div class="s-12 m-12 l-4 center">
        <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Upload Image</h4>
        <form name="contactForm" class="customform" method="post" enctype="multipart/form-data">
            <div class="s-12">
                <div class="margin">
                </div>
            </div>
            <div class="s-12">
                <input name="title" class="subject" placeholder="Title" type="text" required>
                <p class="subject-error form-error">Please enter the title.</p>
            </div>
            <div class="s-12">
                <input  name="file" class="subject" placeholder="file" type="file" required>
                <p class="subject-error form-error">Please select a file</p>
            </div>
            <div class="s-12">
                <textarea name="description" class="required message" placeholder="Your description" rows="3"></textarea>
                <p class="message-error form-error">Please enter your description.</p>
            </div>
            <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
        </form>
    </div>
</section>



<?php include_once('footer.php')?>
