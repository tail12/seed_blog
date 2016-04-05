<!-- index.phpのメインコンテンツ<br> -->

<?php foreach ($this->viewOptions as $viewOption): ?>
  <?php echo $viewOption['id']; ?> :
  <a href="/seed_blog/blogs/show/<?php echo $viewOption['id']; ?>">
    <?php echo $viewOption['title'];; ?>
  </a> :
  <?php echo $viewOption['created']; ?><br>
<?php endforeach; ?>
