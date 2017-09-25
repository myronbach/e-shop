<?php include ROOT . '/views/layouts/header.php'; ?>

	<section>
		<div class="container">
			<div class="row">

				<div class="col-sm-4 col-sm-offset-4 padding-right">

					<?php if ($result):?>
						<p>Дані змінено!</p>
					<?php else:?>

						<?php if (isset($errors) && is_array($errors)):?>
							<ul>
								<?php foreach ($errors as $error):?>
									<li><?= $error?></li>
								<?php endforeach;?>
							</ul>
						<?php endif;?>

						<div class="signup-form"><!--sign up form-->
							<h2>Редагування даних</h2>
							<form action="" method="post">
								<p>Ім'я:</p>
								<input type="text" name="name" placeholder="Ім'я" value="<?= $name;?>"/>
								<p>Пароль:</p>
								<input type="password" name="password" placeholder="Пароль" value="<?= $password;?>"/>
								<input type="submit" name="submit" class="btn btn-default" value="Зберегти" />
							</form>
						</div><!--/sign up form-->
					<?php endif;?>

					<br/>
					<br/>
				</div>
			</div>
		</div>
	</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>