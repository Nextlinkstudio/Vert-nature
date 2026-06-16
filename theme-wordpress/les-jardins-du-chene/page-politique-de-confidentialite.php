<?php get_header(); ?>

<?php
$legal_content = function_exists('get_field') ? get_field('legal_content') : '';
$legal_content = $legal_content ?: '
<h2>Responsable du traitement</h2>
<p>Lucas Morel — Les Jardins du Chêne<br>
12 rue des Tilleuls, 69100 Villeurbanne<br>
<a href="mailto:contact@jardins-du-chene.fr">contact@jardins-du-chene.fr</a></p>

<h2>Données collectées</h2>
<p>Dans le cadre de l\'utilisation de ce site, les données suivantes peuvent être collectées :</p>
<ul>
  <li><strong>Formulaire de contact / devis :</strong> nom, prénom, email, téléphone, message</li>
  <li><strong>Formulaire de rendez-vous :</strong> nom, prénom, email, téléphone, type de RDV</li>
  <li><strong>Données de navigation :</strong> adresse IP, pages visitées, durée de visite (via cookies)</li>
</ul>

<h2>Finalités du traitement</h2>
<ul>
  <li>Répondre à vos demandes de contact et de devis</li>
  <li>Gérer les prises de rendez-vous</li>
  <li>Améliorer l\'expérience utilisateur du site</li>
</ul>

<h2>Base légale</h2>
<p>Le traitement de vos données repose sur votre consentement (formulaires) et sur l\'intérêt légitime de l\'entreprise (amélioration du service).</p>

<h2>Durée de conservation</h2>
<ul>
  <li>Données de contact et devis : <strong>3 ans</strong> à compter du dernier contact</li>
  <li>Données de navigation (cookies) : <strong>13 mois</strong> maximum</li>
</ul>

<h2>Vos droits (RGPD)</h2>
<p>Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez des droits suivants :</p>
<ul>
  <li>Droit d\'accès à vos données</li>
  <li>Droit de rectification</li>
  <li>Droit à l\'effacement (« droit à l\'oubli »)</li>
  <li>Droit à la limitation du traitement</li>
  <li>Droit à la portabilité</li>
  <li>Droit d\'opposition</li>
</ul>
<p>Pour exercer ces droits, contactez-nous à : <a href="mailto:contact@jardins-du-chene.fr">contact@jardins-du-chene.fr</a><br>
Vous pouvez également introduire une réclamation auprès de la <a href="https://www.cnil.fr" target="_blank" rel="noopener">CNIL</a>.</p>

<h2>Cookies</h2>
<p>Ce site utilise des cookies techniques nécessaires à son fonctionnement. Aucun cookie publicitaire ou de tracking tiers n\'est utilisé sans votre consentement.</p>

<p><em>Dernière mise à jour : juin 2026</em></p>
';
?>

<main class="legal-page">
  <div class="legal-hero">
    <div class="container">
      <p class="section-eyebrow">Vos données personnelles</p>
      <h1 class="section-title"><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="container legal-content">
    <div class="legal-body"><?php echo wp_kses_post( $legal_content ); ?></div>
  </div>
</main>

<?php get_footer(); ?>
