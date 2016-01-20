<fieldset>
  <?php foreach($control->fields as $field): ?>
    <div class="field-group">
      <?= $renderer->render($field['label']) ?>
      <?= $renderer->render($field['field']) ?>
    </div>
  <?php endforeach; ?>
</fieldset>
