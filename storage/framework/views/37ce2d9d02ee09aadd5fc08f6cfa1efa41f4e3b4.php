<?php $__env->startSection('center'); ?>
<div class="register_account">
           <div class="wrap">
    	     <h4 class="title">Shopping cart is empty</h4>
    	     <p class="cart">You have no items in your shopping cart.<br>Click<a href="<?php echo e(url('')); ?>/"> here</a> to continue shopping</p>
    	   </div>
    	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>