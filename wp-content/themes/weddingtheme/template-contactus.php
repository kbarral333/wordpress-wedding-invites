<?php 
// Template name: Contact us
?>

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-3">
                <?php if(is_active_sidebar('page-sidebar')):?>
                    <?php dynamic_sidebar('page-sidebar');?>
                <?php endif;?>
            </div>
            <div class="col-9">
            <div class="row">
            <div class="col-lg-6">
                Contact form
            </div>
            <div class="col-lg-6">
                Content
            </div>
        </div>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>