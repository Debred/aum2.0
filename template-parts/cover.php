<?php if (is_front_page()) : ?>
    <div class="cover">
        <h1 class="cover__title">A.U.M </br> Acción por la Unidad Mundial</h1>
    </div>
<?php elseif (is_page_template('page-templates/template-maestros.php')) : ?>
    <div class="cover">
        <p>hola</p>
    </div>
<?php endif; ?>