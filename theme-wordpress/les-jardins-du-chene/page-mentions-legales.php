<?php get_header(); ?>

<?php
$legal_content = function_exists('get_field') ? get_field('legal_content') : '';
$legal_content = $legal_content ?: '
<h2>Éditeur du site</h2>
<p>Le site <strong>www.lesjardinsduchene.fr</strong> est édité par :</p>
<ul>
  <li><strong>Lucas Morel</strong>, Jardinier Paysagiste indépendant</li>
  <li>Micro-entrepreneur — SIRET : 000 000 000 00000</li>
  <li>Adresse : 12 rue des Tilleuls, 69100 Villeurbanne</li>
  <li>Téléphone : <a href="tel:0612345678">06 12 34 56 78</a></li>
  <li>Email : <a href="mailto:contact@jardins-du-chene.fr">contact@jardins-du-chene.fr</a></li>
</ul>

<h2>Hébergement</h2>
<p>Ce site est hébergé par :</p>
<ul>
  <li><strong>o2switch</strong></li>
  <li>222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand</li>
  <li>Téléphone : 04 44 44 60 40</li>
</ul>

<h2>Propriété intellectuelle</h2>
<p>L\'ensemble du contenu de ce site (textes, images, graphismes, logo) est la propriété exclusive de Lucas Morel, sauf mention contraire. Toute reproduction, même partielle, est interdite sans autorisation préalable.</p>

<h2>Responsabilité</h2>
<p>Les informations publiées sur ce site sont fournies à titre indicatif. Lucas Morel s\'efforce de maintenir ces informations à jour mais ne peut garantir leur exactitude ou exhaustivité. L\'utilisateur est seul responsable de l\'utilisation qu\'il fait de ces informations.</p>

<h2>Liens hypertextes</h2>
<p>Ce site peut contenir des liens vers des sites tiers. Lucas Morel n\'exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu.</p>

<h2>Droit applicable</h2>
<p>Les présentes mentions légales sont soumises au droit français. Tout litige relatif à l\'utilisation de ce site relève de la compétence exclusive des tribunaux français.</p>

<p><em>Dernière mise à jour : juin 2026</em></p>
';
?>

<main class="legal-page">
  <div class="legal-hero">
    <div class="container">
      <p class="section-eyebrow">Informations légales</p>
      <h1 class="section-title"><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="container legal-content">
    <div class="legal-body"><?php echo wp_kses_post( $legal_content ); ?></div>
  </div>
</main>

<?php get_footer(); ?>
