<header id="header" role="banner">
  <nav class="aui-header" role="navigation" data-aui-responsive="true">
    <div class="aui-header-primary">
      <h1 class="aui-header-logo aui-header-logo-custom" id="logo">
        <?php if($control->hasIcon()): ?>
          <?= $renderer->renderControl($control->icon) ?>
        <?php endif; ?>
      </h1>
      
      
    </div>
    
    <div class="aui-header-secondary">
      
    </div>
  </nav>
</header>
