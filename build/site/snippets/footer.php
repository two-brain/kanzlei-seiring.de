    </main>
    <footer class="site-footer" role="contentinfo">
      <a data-scroll class="back-top" href="#">
        <?= (new Asset("assets/images/footer_back-top.svg"))->content() ?>
      </a>

      <div class="footer--primary" role="contentinfo">

        <?= (new Asset("assets/images/logo/logo--dark.svg"))->content() ?>
        <hr>
        <p class="lead">non ex regula ius sumatur, sed ex iure, quod est regula fiat</p>

      </div>
      <div class="footer-2" role="contentinfo">
        <div class="footer-logo">
          <?= (new Asset("assets/images/footer_balance.svg"))->content() ?>
        </div>
          <ul>
            <?php foreach($pages->visible() as $item) : ?>
              <li>
                <a href="<?= $item->url() ?>">
                  <?= $item->title()->html() ?>
                </a>
              </li>
            <?php endforeach ?>
          </ul>

          <div class="footer-secondary-links">
            <ul>
              <li><a href="<?= page('datenschutz')->url() ?>">Datenschutz</a></li>
              <li><a href="<?= page('impressum')->url() ?>">Impressum</a></li>
            </ul>
          </div>
      </div>


    </footer>

    <?= js('assets/scripts/main.js', true); ?>

  </body>
</html>
