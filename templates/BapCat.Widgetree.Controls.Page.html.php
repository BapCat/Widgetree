<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8" />
  <title><?= $control->title ?></title>
  
  <link rel="stylesheet" href="//aui-cdn.atlassian.com/aui-adg/5.9.5/css/aui.css" media="all">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="//aui-cdn.atlassian.com/aui-adg/5.9.5/js/aui.js"></script>
</head>

<body>
  <?php if($control->hasBanner()): ?>
    <?= $renderer->render($control->banner) ?>
  <?php endif; ?>
  
  <section id="content" role="mail">
    <div class="aui-page-panel">
      <?php if($control->hasNav()): ?>
        <div class="aui-page-panel-nav">
          <?= $renderer->render($control->nav) ?>
        </div>
      <?php endif ?>
      <section class="aui-page-panel-content">
        <?php foreach($control->body as $control): ?>
          <?= $renderer->render($control) ?>
        <?php endforeach; ?>
      </section>
    </div>
  </section>
</body>

</html>
