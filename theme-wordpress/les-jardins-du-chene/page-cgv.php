<?php get_header(); ?>

<?php
$legal_content = function_exists('get_field') ? get_field('legal_content') : '';
$legal_content = $legal_content ?: '
<h2>Article 1 — Objet</h2>
<p>Les présentes Conditions Générales de Vente (CGV) régissent les relations contractuelles entre Lucas Morel (Les Jardins du Chêne) et tout client faisant appel à ses services de jardinage et d\'aménagement paysager.</p>

<h2>Article 2 — Prestations</h2>
<p>Les Jardins du Chêne propose les prestations suivantes :</p>
<ul>
  <li>Création et conception de jardins</li>
  <li>Entretien d\'espaces verts (tonte, taille, désherbage…)</li>
  <li>Aménagement éco-responsable</li>
  <li>Potagers biologiques</li>
  <li>Élagage et abattage</li>
</ul>
<p>Chaque prestation fait l\'objet d\'un devis écrit préalable, gratuit et sans engagement.</p>

<h2>Article 3 — Devis et commande</h2>
<p>Tout devis est valable <strong>30 jours</strong> à compter de sa date d\'émission. La commande est confirmée par la signature du devis accompagnée du versement d\'un acompte de <strong>30 %</strong> du montant total TTC.</p>

<h2>Article 4 — Tarifs</h2>
<ul>
  <li>Création de jardins : à partir de <strong>80 € / m²</strong></li>
  <li>Entretien d\'espaces verts : à partir de <strong>45 € / heure</strong></li>
  <li>Aménagement éco-responsable : à partir de <strong>65 € / m²</strong></li>
</ul>
<p>Les tarifs sont exprimés en euros TTC. Lucas Morel est micro-entrepreneur non assujetti à la TVA (article 293 B du CGI).</p>

<h2>Article 5 — Paiement</h2>
<ul>
  <li>Acompte de 30 % à la signature du devis</li>
  <li>Solde à régler à la fin de la prestation</li>
  <li>Modes de paiement acceptés : virement bancaire, chèque, espèces</li>
</ul>
<p>Tout retard de paiement entraîne des pénalités de retard au taux légal en vigueur, ainsi qu\'une indemnité forfaitaire de recouvrement de 40 €.</p>

<h2>Article 6 — Délais d\'intervention</h2>
<p>Les délais d\'intervention sont indiqués dans le devis à titre indicatif. Ils peuvent varier en fonction des conditions météorologiques, de la disponibilité des matériaux ou de tout événement indépendant de la volonté du prestataire.</p>

<h2>Article 7 — Annulation</h2>
<ul>
  <li>Annulation par le client <strong>plus de 48h avant</strong> : restitution intégrale de l\'acompte</li>
  <li>Annulation par le client <strong>moins de 48h avant</strong> : l\'acompte est conservé à titre d\'indemnité</li>
  <li>Annulation par le prestataire : restitution intégrale de l\'acompte, sans autre indemnité</li>
</ul>

<h2>Article 8 — Responsabilité</h2>
<p>Lucas Morel est assuré en responsabilité civile professionnelle. En cas de dommage causé lors d\'une intervention, sa responsabilité est engagée dans la limite des dommages directs et prouvés. Elle ne couvre pas les dommages indirects, pertes d\'exploitation ou préjudices immatériels.</p>

<h2>Article 9 — Droit applicable et litiges</h2>
<p>Les présentes CGV sont soumises au droit français. En cas de litige, une solution amiable sera recherchée en priorité. À défaut, le litige sera soumis aux tribunaux compétents du ressort de Lyon.</p>
<p>Conformément à l\'article L.612-1 du Code de la consommation, le client peut recourir gratuitement à un médiateur de la consommation.</p>

<p><em>Dernière mise à jour : juin 2026</em></p>
';
?>

<main class="legal-page">
  <div class="legal-hero">
    <div class="container">
      <p class="section-eyebrow">Conditions commerciales</p>
      <h1 class="section-title"><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="container legal-content">
    <div class="legal-body"><?php echo wp_kses_post( $legal_content ); ?></div>
  </div>
</main>

<?php get_footer(); ?>
