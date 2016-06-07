<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8" />
  <title><?= $title ?></title>
  
  <link rel="stylesheet" href="/<?= $css_file ?>" media="all">
  <script src="/<?= $js_file ?>"></script>
</head>

<body>
  <?php foreach($sections as $section): ?>
    <?= $section ?>
  <?php endforeach; ?>
</body>

</html>
