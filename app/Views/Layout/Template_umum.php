<!doctype html>
<html lang="en">
<head>
  <?= $this->include('Layout\Head_umum') ?>
</head>
<body>

  <?php $this->renderSection('content'); ?>

  <?= $this->include('Layout\Footer_umum') ?>

  <?= $this->include('Layout\Script_umum') ?>

</body>
</html>
