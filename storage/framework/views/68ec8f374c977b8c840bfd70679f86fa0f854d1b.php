<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <?php echo $__env->yieldContent('header'); ?>
</head>

<body>
  <div class="container">
  <?php echo $__env->yieldContent('content'); ?>
</div>
  <?php echo $__env->yieldContent('footer'); ?>
</body>
</html>
