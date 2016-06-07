<input
  id="<?= $name ?>"
  name="<?= $name ?>"
  type="email"
  <?php if(!empty($placeholder)): ?>
    placeholder="<?= $placeholder ?>"
  <?php endif; ?>
  <?php if(!empty($text)): ?>
    value="<?= $text ?>"
  <?php endif; ?>
  <?php if($required): ?>
    required
  <?php endif; ?>
/>
