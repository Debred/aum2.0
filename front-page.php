<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>


<?php get_template_part('./template-parts/cover')  ?>

<section class="cont-about">
    <div class="cont-about__text">
        <p>Lorem ipsum dolor sit amet</p>
        <p>
            Donec condimentum eros placerat, tincidunt orci nec, dignissim sem.
            Aliquam ultrices sollicitudin ullamcorper. Donec tincidunt quis velit ac accumsan.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
        </p>

        <a href="#" class="btn-primary">Conócenos</a>

    </div>
    <picture class="cont-about__img">
        <img src="<?= get_template_directory_uri() ?>/build/images/sectionabout.webp" />
    </picture>
</section>

<section class="cont-icons">
    <svg width="73" height="68" viewBox="0 0 73 68" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d_243_270)">
            <path d="M39.2616 2.8125V4.04297C39.9747 4.18359 40.6654 4.35938 41.2894 4.53516C42.7155 4.93359 43.5622 6.48047 43.1834 7.98047C42.8046 9.48047 41.3339 10.3711 39.9078 9.97266C38.6934 9.63281 37.5569 9.39844 36.5431 9.38672C35.7297 9.375 34.9053 9.58594 34.3816 9.90234C34.1476 10.0547 34.0362 10.1836 33.9916 10.2539C33.9582 10.3125 33.9137 10.3945 33.9137 10.582C33.9137 10.6172 33.9137 10.6406 33.9137 10.6523C33.9359 10.6758 34.0139 10.793 34.2813 10.957C34.9275 11.3672 35.8857 11.6836 37.3341 12.1406L37.4344 12.1758C38.6711 12.5625 40.32 13.0898 41.657 13.9687C43.1834 14.9766 44.565 16.6523 44.5984 19.2305C44.6318 21.8672 43.3283 23.7891 41.6236 24.9141C40.8771 25.3945 40.0749 25.7344 39.2505 25.9453V27.1875C39.2505 28.7461 38.0583 30 36.5765 30C35.0947 30 33.9025 28.7461 33.9025 27.1875V25.8516C32.8441 25.582 31.8748 25.2305 31.0503 24.9375C30.8163 24.8555 30.5935 24.7734 30.3818 24.7031C28.978 24.2109 28.2203 22.6172 28.6883 21.1406C29.1562 19.6641 30.6715 18.8672 32.0753 19.3594C32.365 19.4648 32.6324 19.5586 32.8886 19.6523C34.4039 20.1914 35.4958 20.5781 36.6656 20.625C37.5569 20.6602 38.348 20.4375 38.8048 20.1445C39.0165 20.0039 39.1168 19.8867 39.1613 19.8047C39.2059 19.7344 39.2616 19.5937 39.2505 19.3242V19.3008C39.2505 19.1836 39.2505 19.0547 38.8048 18.7617C38.1697 18.3398 37.2115 18.0117 35.7854 17.5547L35.5737 17.4844C34.3705 17.1094 32.7884 16.6055 31.5182 15.7969C30.0141 14.8477 28.5657 13.2187 28.5546 10.6289C28.5434 7.94531 29.9918 6.10547 31.6408 5.07422C32.3538 4.62891 33.1226 4.32422 33.8914 4.11328V2.8125C33.8914 1.25391 35.0835 0 36.5653 0C38.0472 0 39.2393 1.25391 39.2393 2.8125H39.2616ZM67.8062 39.4102C69.2657 41.4961 68.8424 44.4258 66.8592 45.9609L52.754 56.8945C50.1469 58.9102 47.005 60 43.7628 60H25.8917H8.06529C6.09324 60 4.5 58.3242 4.5 56.25V48.75C4.5 46.6758 6.09324 45 8.06529 45H12.1654L17.1679 40.7812C19.6971 38.6484 22.839 37.5 26.0812 37.5H34.805H36.5876H43.7182C45.6903 37.5 47.2835 39.1758 47.2835 41.25C47.2835 43.3242 45.6903 45 43.7182 45H36.5876H34.805C33.8245 45 33.0223 45.8438 33.0223 46.875C33.0223 47.9062 33.8245 48.75 34.805 48.75H48.2417L61.5781 38.4141C63.5613 36.8789 66.3467 37.3242 67.8062 39.4102ZM26.07 45H25.9697C26.0032 45 26.0366 45 26.07 45Z" fill="white" />
        </g>
        <defs>
            <filter id="filter0_d_243_270" x="0.5" y="0" width="72.1746" height="68" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                <feOffset dy="4" />
                <feGaussianBlur stdDeviation="2" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_243_270" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_243_270" result="shape" />
            </filter>
        </defs>
    </svg>
</section>



<?php get_footer() ?>