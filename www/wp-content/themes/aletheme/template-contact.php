<?php 
/**
 * Template Name: Contact Page
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
    <!-- Content -->
    <div class="contacts-center">
        <div class="content">

            <h1><?php the_title(); ?> | <?php echo bloginfo('description'); ?></h1>

            <div class="contact-content">
                <div class="left">
                    <div class="contacts">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>

                <div><?php echo ale_get_meta('title_one') ?></div>
                <div><?php echo ale_get_meta('title_addr') ?></div>
                <div><?php echo ale_get_meta('site_addr') ?></div>
                <div><?php echo ale_get_meta('title_phone') ?></div>
                <div><?php echo ale_get_meta('site_phone') ?></div>

                <div class="right">
                    <form method="post" action="<?php the_permalink(); ?>">
                        <?php if (isset($_GET['success'])) : ?>
                            <p class="success"><?php _e('Thank you for your message!', 'aletheme')?></p>
                        <?php endif; ?>
                        <?php if (isset($error) && isset($error['msg'])) : ?>
                            <p class="error"><?php echo $error['msg']?></p>
                        <?php endif; ?>

                        <div class="form">
                            <input name="contact[name]" type="text" placeholder="Your Name (required)" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            <input name="contact[email]" type="email" placeholder="Email (required)" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />

                            <textarea name="contact[message]"  placeholder="Your Message (required)"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                            <input type="submit" class="submit" value="<?php _e('Submit', 'aletheme')?>"/>
                        </div>
                        <?php wp_nonce_field() ?>
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php get_footer(); ?>