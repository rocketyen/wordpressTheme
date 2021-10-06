<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post navColor">

            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('post_thumbnail', ['class' => 'img-fluid']); ?>

            <div class="post__meta">
                <p class="mb-5">
                    Publié le <?php the_date(); ?>
                    par <?php the_author(); ?>
                    Dans la catégorie <?php the_category(); ?>
                    Avec les étiquettes <?php the_tags(); ?>
                </p>
            </div>

            <div class="post__content mb-5">
                <?php the_content(); ?>
            </div>
            <?php comments_template(); // Par ici les commentaires 
            ?>
        </article>

<?php endwhile;
endif; ?>
<div class="site__navigation navColor">
    <div class="container mb-5">
        <div class="row d-flex">
            <div class="site__navigation__prev col-6 border previousNext">
                <?php previous_post_link('<-- Article Précédent<br>%link'); ?>
            </div>
            <div class="site__navigation__next col-6 border previousNext">
                <?php next_post_link('Article Suivant --><br>%link '); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>