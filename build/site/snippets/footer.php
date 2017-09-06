          </div>
        </div>
      </div>
    </main>
    <footer id="js-footer" class="site-footer">
      <a class="back-top" href="#">
        <?= (new Asset("assets/images/footer_back-top.svg"))->content() ?>
      </a>
      <div class="site-footer--primary">
        <?= (new Asset("assets/images/logo/logo--dark.svg"))->content() ?>
        <hr>
        <p class="lead">
          <?= $site->quote() ?>
        </p>
      </div>
      <div class="site-footer--secondary">
        <div class="balance">
          <?= (new Asset("assets/images/footer_balance.svg"))->content() ?>
        </div>
        <div class="footer-links">
          <ul>
            <?php snippet('menu') ?>
          </ul>
        </div>
        <div class="footer-links footer-links--secondary">
          <ul>
            <li><a href="<?= page('datenschutz')->url() ?>"><?= page('datenschutz')->title() ?></a></li>
            <li><a href="<?= page('impressum')->url() ?>"><?= page('impressum')->title() ?></a></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.3/turbolinks.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" charset="utf-8"></script> -->
    <?= js('assets/scripts/main.js', true); ?>

  </body>
</html>
