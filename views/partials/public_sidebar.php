<?php if (!empty($this->topics)): ?>
  <section class="page-section topics-container">
    <div>
      <h2>Explore nosso Website</h2>
      <p>Tudo organizado para que você possa navegar com facilidade!</p>
    </div>
    <div class="topics-pills">
      <?php foreach ($this->topics as $topic): ?>
        <a href="<?php url("/topics/" . $topic['slug']); ?>"><?php echo $topic['name']; ?></a>
      <?php endforeach;?>
    </div>
  </section>
<?php endif;?>