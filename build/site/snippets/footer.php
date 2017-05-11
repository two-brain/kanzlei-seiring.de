    </main>
    <footer class="site-footer" role="contentinfo">
      <div class="footer-1">
        <div class="grid-container">
          <div class="one-third">
            <figure>
              <?= (new Asset("assets/images/footer_map.svg"))->content() ?>
            </figure>
            <address>
              Dreikönigstraße 12<br>
              79102 Freiburg
            </address>
          </div>
          <div class="one-third">
            <figure>
              <?= (new Asset("assets/images/footer_phone.svg"))->content() ?>
            </figure>
            <p>
              So erreichen Sie uns:<br>
              Fon: <a href="tel:+4976172523">(0761) 72 523</a>, Fax: (0761) 73 631
            </p>
          </div>
          <div class="one-third">
            <figure>
              <?= (new Asset("assets/images/footer_calendar.svg"))->content() ?>
            </figure>
            <p>
              Unsere Bürozeiten:<br>
              Mo - Fr von 8.30 - 12.30 Uhr, 14 - 17 Uhr
            </p>
          </div>
        </div>
      </div>
      <hr>
      <?php snippet('footer1'); ?>
      <?php snippet('footer2'); ?>
    </footer>

    <?= js('assets/scripts/main.js', true); ?>
    <?= js('assets/jquery.min.js'); ?>
    <?= js('assets/jquery.waypoints.js'); ?>

    <script type="text/javascript">

        // Shrinking header
        var header = document.getElementById('js-sticky-nav');
        var body = document.body || document.documentElement;

        var headerShrink = new Waypoint({
          element: body,
          handler: function(direction) {
            header.classList.toggle('is-fixed');
          },
          offset: '-44'
        });

    </script>

  </body>
</html>
