<nav><a href="http://darkcrystal.pw/">Dark Crystal</a> <a href="http://darkcrystal.pw/ssb-protocol-docs.html" target="_blank">Scuttlebutt Protocol Guide</a> <a href="https://github.com/blockades/" target="_blank">Dark Crystal Repos</a> <a href="https://github.com/ssbc" target="_blank">SSB Repos</a></nav><a class="email" href="mailto: frontdesk@blockades.org">Get in touch</a>

<?= css('assets/css/index.css') ?>


  <div class="main" role="main">

    <div class="wrap">

      <header>
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <hr />
      </header>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>

    </div>

    <section class="team wrap wide">

      <h2>Our Purring Team</h2>

      <ul class="team-list grid gutter-1">
        <?php foreach($page->children()->visible() as $member): ?>
          <li class="team-item column">

            <?php if($image = $member->image()): ?>
              <figure class="team-portrait">
                <img src="<?= $image->url() ?>" alt="Portrait of <?= $member->title()->html() ?>" />
              </figure>
            <?php endif ?>

            <div class="team-info">
              <h3 class="team-name"><?= $member->title()->html() ?></h3>
              <p class="team-position"><?= $member->position()->html() ?></p>
              <div class="team-about text">
                <?= $member->about()->kirbytext() ?>
              </div>
            </div>

            <div class="team-contact text">
              <i>Phone:</i><br />
              <?= kirbytag(['tel' => $member->phone()->html()]) ?><br />
              <i>Email:</i><br />
              <a href="mailto:<?= $member->email()->html() ?>"><?= $member->email()->html() ?></a><br />
            </div>
          </li>
        <?php endforeach ?>
      </ul>

    </section>

  </div>

<?php snippet('footer') ?>
