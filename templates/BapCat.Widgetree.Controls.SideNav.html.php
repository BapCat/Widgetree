<nav class="aui-navgroup aui-navgroup-vertical">
  <div class="aui-navgroup-inner">
    <?php foreach($control->groups as $group): ?>
      <div class="aui-nav-heading">
        <strong><?= $group->name ?></strong>
      </div>
      
      <ul class="aui-nav">
        <?php foreach($group->items as $item): ?>
          <li><a href="<?= $item->href ?>"><?= $item->text ?></a></li>
        <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
  </div>
</nav>
