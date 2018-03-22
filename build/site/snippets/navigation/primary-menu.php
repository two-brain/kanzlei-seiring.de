<?php

  $menu_items = $pages->visible();
  $first_item = $menu_items->first();

  foreach($menu_items as $item) : ?>

  <li<?php e($item == $first_item, ' class="is-first"') ?>>
    <a<?php e($item->isOpen(), ' class="is-active"') ?> href="<?= $item->url() ?>">
      <?= $item->title()->html() ?>
    </a>
  </li>
<?php endforeach ?>
