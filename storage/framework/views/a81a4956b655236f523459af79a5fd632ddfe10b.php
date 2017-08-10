<?php $__env->startSection('content'); ?>
	<div class="main_btm"><!-- start main_btm -->
		<div class="container">
				<div class="main row">
					<div class="col-md-4 company_ad">
						<h2>find Address :</h2>
						<address>
							<p>500 Lorem Ipsum Dolor Sit,</p>
							<p>22-56-2-9 Sit Amet, Lorem,</p>
							<p>USA</p>
							<p>Phone:(00) 222 666 444</p>
							<p>Fax: (000) 000 00 00 0</p>
							<p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
							<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
						</address>
					</div>
					<div class="col-md-8">
						<div class="contact-form">
							<h2>Contact Us</h2>
							<form method="post" action="contact-post.html">
								<div>
									<span>name</span>
									<span><input type="username" class="form-control" id="userName"></span>
								</div>
								<div>
									<span>e-mail</span>
									<span><input type="email" class="form-control" id="inputEmail3"></span>
								</div>
								<div>
									<span>subject</span>
									<span><textarea name="userMsg"> </textarea></span>
								</div>
								<div>
									<label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit us"></label>
								</div>
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>