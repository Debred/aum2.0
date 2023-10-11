<?php if (is_front_page()) : ?>
    <section class="cover">
        <h1 class="cover__title h1">A.U.M </br> Acción por la Unidad Mundial</h1>
    </section>
<?php elseif (is_page_template('page-templates/template-about.php')) : ?>
    <section class="cover">
        <h1 class="cover__title h1">hola</h1>
    </section>

<?php elseif (is_home()) : ?>
    <section class="cover">
        <h1 class="cover__title h1">Blog</h1>
    </section>
<?php endif; ?>