<?php
/*Template Name: Template About*/
?>
<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<?php get_template_part('template-parts/cover') ?>

<div class="container page with-sidebar cont-page-about">
    <div class="cont-order">
        <div class="cont-order__first">
            <h2 class="titleblue">
                Curabitur blandit tempus porttitor.
                Nullam quis risus eget urna mollis ornare vel eu leo.
                Nullam id dolor id nibh ultricies vehicula ut id elit.
            </h2>
            <p class="formatted-text">
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.
                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
            </p>
            <h3 class="section-title titleyellow">
                Sub-heading
            </h3>
            <p class="formatted-text">
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
            </p>
            <h3 class="section-title titleyellow">
                Another Heading
            </h3>
            <p class="formatted-text">
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
                Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
            </p>

        </div>

        <div class="cont-order__second">
            <?php get_template_part('template-parts/slide')  ?>
        </div>

        <div class="cont-order__third">
            <!---Aqui va el sidebar del Valverde-->
        </div>
    </div>

    </section>

    <?php get_footer() ?>