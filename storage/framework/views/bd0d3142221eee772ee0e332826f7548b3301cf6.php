<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-6 col-md-offset-3"

    <h1><?php echo e($card->title); ?></h1>
    <h4><?php echo e($card->contents); ?></h4>
    <h4>By <?php echo e($card->username); ?></h4>

      <ul class="list-group">
        <?php $__currentLoopData = $card->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="list-group-item"><?php echo e($note->body); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>

      <hr>
      <h3> Add a new note about the car</h3>

        <form method="POST" action="/cards/<?php echo e($card->id); ?>/notes">
          <div class="form-group">
            <textarea name="body" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit Note</button>
          </div>
        </form>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>