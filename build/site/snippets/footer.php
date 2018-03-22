        </main>
        <footer id="js-footer" class="site-footer">
          <button id="back-to-top" class="back-top" href="#">
            <?= (new Asset("assets/images/footer_back-top.svg"))->content() ?>
          </button>
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
                <?php snippet('navigation/primary-menu') ?>
              </ul>
            </div>
            <div class="footer-links footer-links--secondary">
              <ul>
                <?php snippet('navigation/secondary-menu') ?>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <?= js('assets/scripts/main.js', true); ?>

  </body>
</html>
