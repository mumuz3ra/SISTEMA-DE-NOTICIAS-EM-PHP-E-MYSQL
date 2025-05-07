<?php if (!empty($this->errors)): ?>
  <ul class="erro" style='list-style-type: none;'>
    <?php foreach ($this->errors as $error): ?>
      <li> - <?php echo $error; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
