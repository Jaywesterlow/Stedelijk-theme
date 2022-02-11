<?php get_header(); ?>
<!-- <body> -->

<div class="w-100 d-flex align-items-center popup-message">
    <p class="px-5 py-1">HET MUSEUM IS OPEN EN VEILIG TE BEZOEKEN. DENK JE AAN JE TIJDSLOT, CORONATOEGANGSBEWIJS EN MONDKAPJE?</p>
</div>

<hr class="divider-pb">

<div class="w-100 d-flex align-items-center flex-row content-spacing">
  <div class="link-container d-flex align-items-center flex-row">
    <a href="#bouwZoalsDeMeesters" class="link-styling"><h3>WORKSHOP BOUW ZOALS DE MEESTERS</h3></a>
      <i class="fas fa-long-arrow-alt-right fa-3x arrow-right"></i>
  </div>
</div>

<hr class="divider-py">

<?php $programma_1_link = get_post(54); ?>
<?php echo $programma_1_link->post_content; ?>

<hr class="divider-py">

<?php $programma_2_link = get_post(57); ?>
<?php echo $programma_2_link->post_content; ?>

<hr class="divider-py">

<?php $programma_3_link = get_post(59); ?>
<?php echo $programma_3_link->post_content; ?>

<hr class="divider-pt">

<div class="w-100 p-5 slider-container">
  <div class="foto-slider w-100">
  
  </div>
</div>

<hr class="divider-py">

<div class="w-100 d-flex justify-content-center flex-column content-spacing" id="bouwZoalsDeMeesters">
  <h1>BOUW ZOALS DE MEESTERS</h1>
  <p class="description pb-4">Bedrijfsuitje - Groepsactiviteit</p>
</div>

<hr class="divider-py">

<div class="w-100 d-flex align-items-center flex-row content-spacing">
  <button type="button" class="btn bg-dark text-light my-3">Koop Tickets</button>
</div>

<hr class="divider-py">

<div class="w-100 d-flex flex-column flex-xl-row align-items-start justify-content-around justify-content-xl-between content-spacing">
  <div class="programExplenation">
    <p class="description">
      Is het mogelijk om een actieve dag in het stedelijk museum te hebben voor een grote groep? <br>
      Ja het kan:
    </p>
    <h4 class="pt-2">Een dag voor het leven</h4>
    <p class="description">
      Voor groepen tot 200 personen kunt u kunst ervaren vanuit de ogen van kunstenaars. <br>
      Kies 1 van onze dag activeit pakketten die past bij uw wensen en kom langs in ons museum. <br>
      Bestaande uit: <br>
    </p>
    <ul class="paragraphList">
      <li>- Een rondleiding met gids</li>
      <li>- Een uitgebreide lunch</li>
      <li>- De bouw workshop</li>
    </ul>
    <br>
    <p class="description">
      Behoefte aan een kunstzinnige maar actieve dag? <br>
      Koop dan nu tickets en kom langs!
    </p>
    <br>
    <em>
      Wij zien u graag voor een dagje van kijken en doen bij de kunstworkshop.
    </em>
  </div>
  
  <div class="d-flex justify-content-xl-end programExplenation">
    <img class="artwork-1" src="<?php echo get_template_directory_uri(); ?>/images/artwork1.png" />
  </div>
</div>

<hr class="divider-py mt-4">

<!-- PROGRAM 1 -->
<div class="w-100 d-flex justify-content-center flex-column content-spacing" id="programma-1">
  <h2 class="program">PROGRAMMA 1</h2>
  <h2>RONDLEIDING MET GIDS, UITGEBREIDE LUNCH & BOUW WORKSHOP</h2>
  <div class="d-flex align-items-center">
    <p class="description">Bedrijfsuitje - Groepsactiviteit - Bouw zoals de meesters</p>
    <i class="fas fa-long-arrow-alt-right fa-2x arrow-left"></i>
  </div>
</div>

<hr class="divider-py mt-4">

<div class="w-100 d-flex justify-content-center flex-column content-spacing">
  <div class="d-flex align-items-center order-hover">
    <h2>BESTEL UW TICKETS NU HIER</h2>
    <i class="fas fa-long-arrow-alt-right fa-4x arrow-right"></i>
  </div>
</div>

<hr class="divider-py mt-4">

<div class="w-100 d-flex justify-content-center flex-column content-spacing">
  <div class="program-container d-flex flex-column align-items-center">
    <p class="description col-10 col-xl-9">
      Voor groepen tot 200 personen kunt u kunst ervaren vanuit de ogen van kunstenaars. <br>
      U zal bezig zijn met kunst en creativiteit. Het programma begint om 11:00 en eindigt om 15:00. Dit programma bestaat uit 3 onderdelen: de rondleiding met een gids, de uitgebreide lunch en de bouw workshop. <br>
      Dit kost €100 per persoon en alles word geregeld door ons. <br>
      U hoeft dus niks extra te betalen of mee te nemen.
    </p>
    
    <div class="d-flex flex-column  flex-xl-row-reverse align-items-center align-items-xl-start justify-content-xl-center py-5">
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-6">
        <?php $rondleiding_met_gids = get_post(65); ?>
        <?php echo $rondleiding_met_gids->post_content; ?>
      </div>
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-3">
        <img class="artwork-1" src="<?php echo get_template_directory_uri(); ?>/images/artwork-guide.png" />
      </div>
    </div>

    <div class="d-flex flex-column  flex-xl-row-reverse align-items-center align-items-xl-start justify-content-xl-center py-5">
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-6">
        <?php $uitgebreide_lunch = get_post(67); ?>
        <?php echo $uitgebreide_lunch->post_content; ?>
      </div>
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-3">
        <img class="artwork-1" src="<?php echo get_template_directory_uri(); ?>/images/prog1-artwork1.png" />
      </div>
    </div>

    <div class="d-flex flex-column  flex-xl-row-reverse align-items-center align-items-xl-start justify-content-xl-center py-5">
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-6">
        <?php $bouw_workshop = get_post(69); ?>
        <?php echo $bouw_workshop->post_content; ?>
      </div>
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-3">
        <img class="artwork-1" src="<?php echo get_template_directory_uri(); ?>/images/prog1-artwork2.png" />
      </div>
    </div>
  </div>
</div>

<hr class="divider-py mt-4">

<!-- PROGRAM 2 -->
<div class="w-100 d-flex justify-content-center flex-column content-spacing" id="programma-2">
  <h2 class="program">PROGRAMMA 2</h2>
  <h2>RONDLEIDING MET GIDS & UITGEBREIDE LUNCH</h2>
  <div class="d-flex align-items-center">
    <p class="description">Bedrijfsuitje - Groepsactiviteit - Bouw zoals de meesters</p>
    <i class="fas fa-long-arrow-alt-right fa-2x arrow-left"></i>
  </div>
</div>

<hr class="divider-py mt-4">

<div class="w-100 d-flex justify-content-center flex-column content-spacing">
  <div class="d-flex align-items-center order-hover">
    <h2>BESTEL UW TICKETS NU HIER</h2>
    <i class="fas fa-long-arrow-alt-right fa-4x arrow-right"></i>
  </div>
</div>

<hr class="divider-py mt-4">

<div class="w-100 d-flex justify-content-center flex-column content-spacing">
  <div class="program-container d-flex flex-column align-items-center">
    <p class="description col-10 col-xl-9">
      Voor groepen tot 200 personen kunt u kunst ervaren vanuit de ogen van kunstenaars. <br>
      U zal bezig zijn met kunst en creativiteit. Het programma begint om 11:00 en eindigt om 13:00. Dit programma bestaat uit 2 onderdelen: de rondleiding met een gids en de uitgebreide lunch. <br>
      Dit kost €65 per persoon en alles word geregeld door ons. <br>
      U hoeft dus niks extra te betalen of mee te nemen.
    </p>
    <div class="d-flex flex-column  flex-xl-row-reverse align-items-center align-items-xl-start justify-content-xl-center py-5">
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-6">
        <?php $rondleiding_met_gids = get_post(65); ?>
        <?php echo $rondleiding_met_gids->post_content; ?>
      </div>
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-3">
        <img class="artwork-1" src="<?php echo get_template_directory_uri(); ?>/images/artwork-guide.png" />
      </div>
    </div>

    <div class="d-flex flex-column  flex-xl-row-reverse align-items-center align-items-xl-start justify-content-xl-center py-5">
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-6">
        <?php $uitgebreide_lunch = get_post(67); ?>
        <?php echo $uitgebreide_lunch->post_content; ?>
      </div>
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-3">
        <img class="artwork-1" src="<?php echo get_template_directory_uri(); ?>/images/prog1-artwork1.png" />
      </div>
    </div>
  </div>
</div>

<hr class="divider-py mt-4">

<!-- PROGRAM 3 -->
<div class="w-100 d-flex justify-content-center flex-column content-spacing" id="programma-3">
  <h2 class="program">PROGRAMMA 3</h2>
  <h2>UITGEBREIDE LUNCH, BOUW WORKSHOP</h2>
  <div class="d-flex align-items-center">
    <p class="description">Bedrijfsuitje - Groepsactiviteit - Bouw zoals de meesters</p>
    <i class="fas fa-long-arrow-alt-right fa-2x arrow-left"></i>
  </div>
</div>

<hr class="divider-py mt-4">

<div class="w-100 d-flex justify-content-center flex-column content-spacing">
  <div class="d-flex align-items-center order-hover">
    <h2>BESTEL UW TICKETS NU HIER</h2>
    <i class="fas fa-long-arrow-alt-right fa-4x arrow-right"></i>
  </div>
</div>

<hr class="divider-py mt-4">

<div class="w-100 d-flex justify-content-center flex-column content-spacing">
  <div class="program-container d-flex flex-column align-items-center">
    <p class="description col-10 col-xl-9">
      Voor groepen tot 200 personen kunt u kunst ervaren vanuit de ogen van kunstenaars. <br>
      U zal bezig zijn met kunst en creativiteit. Het programma begint om 12:00 en eindigt om 15:00. Dit programma bestaat uit 2 onderdelen: de uitgebreide lunch en de bouw workshop. <br>
      Dit kost €75 per persoon en alles word geregeld door ons. <br>
      U hoeft dus niks extra te betalen of mee te nemen.
    </p>

    <div class="d-flex flex-column  flex-xl-row-reverse align-items-center align-items-xl-start justify-content-xl-center py-5">
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-6">
        <?php $uitgebreide_lunch = get_post(67); ?>
        <?php echo $uitgebreide_lunch->post_content; ?>
      </div>
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-3">
        <img class="artwork-1" src="<?php echo get_template_directory_uri(); ?>/images/prog1-artwork1.png" />
      </div>
    </div>

    <div class="d-flex flex-column  flex-xl-row-reverse align-items-center align-items-xl-start justify-content-xl-center py-5">
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-6">
        <?php $bouw_workshop = get_post(69); ?>
        <?php echo $bouw_workshop->post_content; ?>
      </div>
      <div class="d-flex flex-column align-items-center align-items-xl-start col-10 col-xl-3">
        <img class="artwork-1" src="<?php echo get_template_directory_uri(); ?>/images/prog1-artwork2.png" />
      </div>
    </div>
  </div>
</div>

<!-- </ body> -->

<?php get_footer();?>
