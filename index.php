<?php get_template_part('template-parts/layout/header'); ?>

<main>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <h2><?php echo "Заговок 1 уровня"; ?></h2>
        <?php echo "Тут какое то описание"; ?>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_template_part('template-parts/layout/footer'); ?>
