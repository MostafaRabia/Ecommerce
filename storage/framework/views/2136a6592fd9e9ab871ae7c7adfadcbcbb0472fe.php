<?php $__env->startSection('center'); ?>
<div class="login">
          	<div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">New Customers</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
					<div class="button1">
					   <a href="register.html"><input type="submit" name="Submit" value="Create an Account"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	           		<h4 class="title">Registered Customers</h4>
					<div id="loginbox" class="loginbox">
						<form action="" method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Email</label>
						      <input id="modlgn_username" type="text" name="email" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Password</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="#">Forget Your Password ? </a></label>
							   </p>
							   <style>@import  url("https://fonts.googleapis.com/css?family=Roboto");

							   	.facebook-btn,
.gplus-btn {
  display: block;
  float: right;
  width: 51%;
  height: 35px;
  margin-top: 20px;
  padding: 0 7px;
  background-color: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  font: 14px roboto;
  text-align: left;
  transition: background-color 1s ease, color 0.7s ease, box-shadow 1s ease;
}

.facebook-btn {
  background-color: #3B5998;
  color: #fff;
}

.gplus-btn {
  background-color: #d34836;
  color: #fff;
}

.facebook-btn:hover,
.gplus-btn:hover {
  box-shadow: 0 0 1px #999;
}

.facebook-btn:hover {
  background-color: #fff;
  color: #3B5998;
}

.gplus-btn:hover {
  background-color: #fff;
  color: #d34836;
}

.facebook-btn i,
.gplus-btn i {
  display: inline-block;
  width: 50px;
  text-align: center;
  border-right: 1px solid #fff;
  margin-right: 10px;
  transition: border-right-color 0.7s ease;
}

.facebook-btn:hover i {
  border-right: 1px solid #3B5998;
}

.gplus-btn:hover i {
  border-right: 1px solid #d34836;
}

.facebook-btn span,
.gplus-btn span {
  text-transform: capitalize;
}
							   </style>
							    <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
							    <button class='facebook-btn facebook-login'>
						            <i aria-hidden='true' class='fa fa-facebook'></i>
						            <span>login with facebook</span>
					          	</button>
					          	<button class='gplus-btn gplus-login'>
						            <i aria-hidden='true' class='fa fa-google-plus'></i>
						            <span>login with google plus</span>
					          	</button>
							 </div>
						  </fieldset>
						 </form>
					</div>
			    </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('shop_view').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>