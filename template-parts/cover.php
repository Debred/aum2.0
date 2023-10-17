<?php if (is_front_page()) : ?>
    <section class="cover">
        <h1 class="cover__title h1">A.U.M </br> Acción por la Unidad Mundial</h1>
    </section>
<?php elseif (is_page()) : ?>
    <section class="cover">
        <h1 class="cover__title h1"><?= get_the_title(); ?></h1>
    </section>

<?php elseif (is_home()) : ?>
    <section class="cover">
        <h1 class="cover__title h1"><?= get_the_title(get_option('page_for_posts')); ?></h1>
    </section>
<?php endif; ?>