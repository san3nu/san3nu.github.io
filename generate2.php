<textarea>
<div class="column">
  <?php for ($i = 1; $i < 93; $i++) {
    if ($i % 16 == 0) { ?>
</div>
<div class="column">
<?php } ?>
<div class="image-item">
  <img src="assets/images/testimony/san3nu (<?= $i; ?>).png" alt="" />
  <div class="overlay"><span>View</span></div>
</div>
<?php } ?>
</div>
</textarea>