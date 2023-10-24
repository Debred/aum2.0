<?php
/*Template Name: Template Locations*/
?>
<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<?php get_template_part('template-parts/cover') ?>
<div class="container page locations-container">
    <main class="locations">
        <details class="location">
            <summary class="location__area">
                <p class="title">México</p>
            </summary>
            <div class="location__content">

                <div class="location__info">
                    <p class="location__name">Ciudad de México</p>
                    <p class="location__address formatted-text">Calle Segunda Privada 11 De Abril #5 Interior 303 Colonia Escandon 1 C.P. 11800 Delegacion Miguel Hidalgo México CDMX</p>
                    <a href="" class="location__link">Conocer Más de esta Sede</a>

                    <div class="contact-info formatted-text">
                        <p class="h4">Informes</p>
                        <p class="name">Cecilia Martinez S.</p>
                        <a href="mailto:">aum_aguascalientes@hotmail.com</a>
                        <p class="phone">Cel:<a href="tel:+">449 227 0518</a></p>
                    </div>

                </div>

                <div class="location__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.8202880807157!2d-99.11814402315593!3d19.290179845210606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0176569aaaab%3A0x5a0fbecd5c9a2126!2sCentro%20de%20Verificaci%C3%B3n%20Vehicular%20TL14!5e0!3m2!1ses-419!2smx!4v1697513085627!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </details>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer() ?>