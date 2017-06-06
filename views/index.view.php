<?php require 'partials/head.php'; ?>
      <ul>
        <?php foreach ($task as $item): ?>
          <li>
            <?php if ($item->completed ): ?>
              <strike><?=$item->description; ?></strike>
            <?php else: ?>
                <?=$item->description; ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
<?php require 'partials/footer.php'; ?>
