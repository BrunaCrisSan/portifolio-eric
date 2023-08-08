<?php $experiencias = get_page_by_path('experiencias'); ?>

<section class="article-experiencia">
            <h2 class="perfil-title font-1"><?php the_field('titulo_experiencias', $experiencias); ?></h2>
            <div class="article-g font-1">
                <div class="perfil-grid-6">
                    <article class="expe-six">
                        <button class="btn-data">
                            <?php the_field('data_atual1', $experiencias); ?>
                        </button>
                        <h2 class="article-title">
                            <?php the_field('nome_empresa1', $experiencias); ?>
                        </h2>
                        <h3>
                            <?php the_field('area1', $experiencias); ?>
                        </h3>
                        <p>
                            <?php the_field('info_1', $experiencias); ?>
                        </p>
                    </article>

                </div>
                <div class="perfil-grid-5">
                    <article>
                        <div class="perfil-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/bagagem.svg" alt="">
                        </div>
                    </article>

                </div>
                <div class="perfil-grid-4">
                    <article>
                    </article>
                </div>
                <div class="perfil-grid-3">
                    <article class="expe-three">
                        <div class="perfil-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/bagagem.svg" alt="">
                        </div>
                        <button class="btn-data">
                            <?php the_field('data_atual2', $experiencias); ?>
                        </button>
                        <h2 class="article-title">
                            <?php the_field('nome_empresa2', $experiencias); ?>
                        </h2>
                        <h3>
                            <?php the_field('area2', $experiencias); ?>
                        </h3>
                        <p>
                            <?php the_field('info_2', $experiencias); ?>
                        </p>
                    </article>

                </div>
                <div class="perfil-grid-2">
                    <article class="expe-two">
                        <button class="btn-data">
                            <?php the_field('data_atual3', $experiencias); ?>
                        </button>
                        <h2 class="article-title">
                            <?php the_field('nome_empresa3', $experiencias); ?>
                        </h2>
                        <h3>
                            <?php the_field('area3', $experiencias); ?>
                        </h3>
                        <p>
                            <?php the_field('info_3', $experiencias); ?>
                        </p>
                    </article>
                </div>
                <div class="perfil-grid-1">
                    <article>
                        <div class="perfil-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/bagagem.svg" alt="">
                        </div>
                    </article>
                </div>
            </div>
        </section>