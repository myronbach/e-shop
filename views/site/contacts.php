<?php include ROOT.'/views/layouts/header.php'; ?>

	<section>
		<div class="container">
			<div class="row">

				<div class="col-sm-4 col-sm-offset-4 padding-right">


						<div class="signup-form"><!--sign up form-->
							<h2>Зворотній зв'язок</h2>
							<h5>Маєте запитання? Напишіть нам</h5>
							<br/>
							<form action="#" method="post">
								<p>Ваша пошта</p>
								<input type="email" name="userEmail" placeholder="E-mail" value="<?php  ?>"/>
								<p>Повідомлення</p>
								<input type="text" name="userText" placeholder="Повідомлення" value="<?php  ?>"/>
								<br/>
								<input type="submit" name="submit" class="btn btn-default" value="Відправити" />
							</form>
						</div><!--/sign up form-->



					<br/>
					<br/>
				</div>
			</div>
		</div>
	</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>