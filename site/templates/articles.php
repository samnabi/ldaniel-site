<?php snippet('header') ?>

<main>

  <? snippet('page-header', ['page' => $page]) ?>

  <section class="">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-7 col-md-offset-1 u-pv10vh">

        <? foreach ($page->children()->visible()->flip() as $article) : ?>
          <div class="line" style="margin-left: 2rem;"></div>

          <a href="<?= $article->url() ?>" class="list__article">

            <h3><?= $article->title()->html() ?></h3>

            <div class="meta"><date><?= $article->date('d M Y') ?></date> — <? snippet('reading-time', ['text' => $article->text()]) ?></div>

            <p><?= excerpt($article->text(), 200) ?></p>

            <button class="button button-outline u-mt1">read</button>

          </a>
        <? endforeach ?>

      </div>
    </div>
  </section>

</main>

<?php snippet('footer') ?>