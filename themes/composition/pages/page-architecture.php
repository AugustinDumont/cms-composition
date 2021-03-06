<?php /* Template Name: Architecture Template */ ?>

<?php get_header(); ?>

<div class="page-content">
  <div class="block-black"></div>
  <div class="block-content">
    <section class="container-diaporama">
      <h1 class="center slide-content-left"><?= get_field('title_page', 'options'); ?></h1>
      <div class="content-diaporama center">
        <!-- Permet de faire un query pour récupérer les projets -->
        <!-- https://codex.wordpress.org/the_loop => Multiple Loops Example 2 -->
        <?php query_posts( 'category_name=projets' ); ?>

        <div class="posts">
          <?php if ( have_posts() ) : ?>
            <div id="slider-diaporama">
              <?php while ( have_posts() ) : the_post(); ?>
                <!-- début d'un bloc post -->
                <div class="post fade-content">
                  <?php the_post_thumbnail(); ?>
                  <div class="info-project">
                    <div class="info-content">
                      <h2 class="title"><?php the_title(); ?> - <?php the_time('Y'); ?></h2>
                      <a class="link" href="<?php the_permalink(); ?>">
                        Voir le projet <span class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/svg/Group 1300.svg" alt="Fleche vers la droite"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- fin d'un bloc post -->
              <?php endwhile; ?>
            </div>

            <div id="nav-diaporama">
              <span class="previous">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.429" height="9.286" viewBox="0 0 15.429 9.286">
                  <g id="fleche-droite" transform="translate(12.929 8.786) rotate(180)">
                    <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                    <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  </g>
                </svg>
              </span>
              <span class="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.429" height="9.286" viewBox="0 0 15.429 9.286">
                  <g id="fleche-droite" transform="translate(12.929 8.786) rotate(180)">
                    <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                    <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  </g>
                </svg>
              </span>
            </div>
          <?php else: ?>
            <p><?php _e('Désolé, nous n\'avons pas de projet à vous présentez pour le moment.'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="container-histoire center">
<<<<<<< HEAD
      <div class="block first-block slide-content-left">
        <?php $firstBlock = get_field('partie_1', 'options'); ?>
        
        <h1><?= $firstBlock['title']; ?></h1>
        <p class="subtitle"><?= $firstBlock['sous_titre'] ?></p>
        <?= $firstBlock['texte'] ?>
=======
      <div class="block first-block">
        <h1><span class="bolder">150 €</span> d'étude d'archi</h1>
        <p class="subtitle">Plutôt une bonne affaire, non ?</p>
        <p class="light">Offrez-vous une étude complète d'architecte d'intérieur dès lors que vous êtes intéressés par du mobilier de notre magasin.</p>
        <p>Pour 150 € au lieu de 1100 €, vous recevez un projet de réaménagement complet d'une pièce ou de l'ensemble de votre maison.</p>
>>>>>>> ddd0a9a34c4591cf88f1e170d2495fe3dbb499e1
      </div>
      <div class="block second-block fade-content">
        <?php $secondBlock = get_field('partie_2', 'options'); ?>
        <?= $secondBlock['texte']; ?>
      </div>
      <div class="block third-block fade-content">
        <img src=" <?= get_field('partie_3', 'options')['image']['url']; ?>" alt="">
      </div>
      <div class="block fourth-block slide-content-right">
        <?= get_field('partie_4', 'options')['texte']; ?>
      </div>
      <div class="block fifth-block slide-content-right">
        <div class="block-grey"></div>
      </div>
    </section>
    <section class="container-caractere center">
<<<<<<< HEAD
      <div id="history-gallery" class="container-diaporama fade-content">
=======
      <div id="history-gallery" class="container-diaporama">
>>>>>>> ddd0a9a34c4591cf88f1e170d2495fe3dbb499e1
        <div class="content-diaporama">
          <div class="posts">
            <div id="slider-diaporama">
              <?php 
                $slider = get_field('slider', 'options');
                if(!empty($slider)):
                foreach($slider as $value):
              ?>
                <div class="post">
                  <img class="fade-content" src="<?= $value['image']['url'] ?>" alt="<?= $value['image']['title'] ?>" />
                </div>
              <?php 
                endforeach; 
                endif;
              ?>
            </div>

            <div id="nav-diaporama">
              <span class="previous">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.429" height="9.286" viewBox="0 0 15.429 9.286">
                  <g id="fleche-droite" transform="translate(12.929 8.786) rotate(180)">
                    <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                    <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  </g>
                </svg>
              </span>
              <span class="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.429" height="9.286" viewBox="0 0 15.429 9.286">
                  <g id="fleche-droite" transform="translate(12.929 8.786) rotate(180)">
                    <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                    <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  </g>
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="content-caractere slide-content-left">
        <?php $caractereBlock = get_field('details', 'options'); ?>
        <h1><?= $caractereBlock['titre'] ?></h1>
        <p class="subtitle"><?= $caractereBlock['sous-titre'] ?></p>

        <div class="split light">
          <div class="col-4">
            <?= $caractereBlock['texte_1'] ?>
          </div>
          <div class="col">
            <?= $caractereBlock['texte_2'] ?>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="block-contact slide-content-right">
    <div class="center">
      <div class="white-block slide-content-left">
        <h1>Je souhaite connaître les conditions</h1>
        <a class="link" href="<?php echo get_site_url(); ?>/contact">
          Contact <span class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/svg/Group 1300.svg" alt="Fleche vers la droite"></span>
        </a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>  