<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Practitioner</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="about.php">About us</a></li>
          <li><a href="contact.php">Contact us</a></li>
      </ul>
    </nav>
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
  </body>
</html>
