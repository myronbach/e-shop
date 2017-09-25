<?php include ROOT . '/views/layouts/header_admin.php'; ?>

	<section>
		<div class="container">
			<div class="row">

				<br/>

				<div class="breadcrumbs">
					<ol class="breadcrumb">
						<li><a href="/admin"> Панель адміністратора</a></li>
						<li><a href="/admin/product">Керування товарами</a></li>
						<li class="active">Створити товар</li>
					</ol>
				</div>


				<h4>Додати новий товар</h4>

				<br/>



				<div class="col-lg-4">
					<div class="login-form">
						<form action="#" method="post" enctype="multipart/form-data">

							<p>Найменування товару</p>
							<input type="text" name="name" placeholder="" value="">

							<p>Артикул</p>
							<input type="text" name="code" placeholder="" value="">

							<p>Вартість, $</p>
							<input type="text" name="price" placeholder="" value="">

							<p>Категорія</p>
							<select name="category_id">
								<?php if (isset($categoriesList)):?>
									<?php foreach ($categoriesList as $category):?>
										<option value="<?= $category['id'];?>">
											<?= $category['name_category']?>
										</option>
									<?php endforeach;?>
								<?php endif;?>

							</select>

							<br/><br/>

							<p>Виробник</p>
							<input type="text" name="brand" placeholder="" value="">

							<p>Зображення товару</p>
							<input type="file" name="image" placeholder="" value="">

							<p>Детальний опис</p>
							<textarea name="description"></textarea>

							<br/><br/>

							<p>Наявність на складі</p>
							<select name="availability">
								<option value="1" selected="selected">Так</option>
								<option value="0">Ні</option>
							</select>

							<br/><br/>

							<p>Новинка</p>
							<select name="is_new">
								<option value="1" selected="selected">Так</option>
								<option value="0">Ні</option>
							</select>

							<br/><br/>

							<p>Рекомендовані</p>
							<select name="is_recommended">
								<option value="1" selected="selected">Да</option>
								<option value="0">Нет</option>
							</select>

							<br/><br/>

							<p>Статус</p>
							<select name="status">
								<option value="1" selected="selected">Відображається</option>
								<option value="0">Приховано</option>
							</select>

							<br/><br/>

							<input type="submit" name="submit" class="btn btn-default" value="Зберегти">

							<br/><br/>

						</form>
					</div>
				</div>

			</div>
		</div>
	</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>