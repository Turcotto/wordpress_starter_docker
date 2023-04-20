<?php
/*
Template Name: Home
*/

$slider = get_field('slider');
$titrePresentation = get_field('titre_presentation');
$textePresentation = get_field('petit_texte_presentation');
$paragraphePresentation = get_field('paragraphe_presentation');
$imagePresentation = get_field('image_presentation');
$texteCta = get_field('texte_cta');
$imageCta = get_field('image_cta');
$titreTemoignages = get_field('titre_temoignage');
$textesTemoignages = get_field('temoignages');

get_header();
?>

<section id="home">

</section>

<?php
get_footer();
