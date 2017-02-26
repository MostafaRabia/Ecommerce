<?php echo $__env->yieldContent('top'); ?>
<?php echo $__env->make(app('shop_view').'.Header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('center'); ?>
<?php echo $__env->make(app('shop_view').'.Footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('bottom'); ?>