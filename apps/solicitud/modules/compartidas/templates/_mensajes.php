<?php if($sf_user->hasFlash("notificacion")): ?>
<div class="alert alert-success">
  <a class="close" data-dismiss="alert" href="#">×</a>
  <?= $sf_user->getFlash("notificacion") ?>
</div>
<?php endif; ?>