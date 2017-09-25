<?php include ROOT.'/views/layouts/header.php'?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Каталог</h2>
						<div class="panel-group category-products">

							<?php foreach ($categories as $categoryItem):?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="/category/<?= $categoryItem['id'];?>">
												<?= $categoryItem['name']?></a></h4>
									</div>
								</div>
							<?php endforeach;?>

						</div>
					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items">
						<h2 class="title text-center">Кошик</h2>
						<?php if ($productsInCart):?>
							<?php echo "Yesss"?>
							<p>Ви вибрали такі товари</p>
							<table class="table-bordered table-striped table">
								<tr>
									<th>Код товару</th>
									<th>Назва</th>
									<th>Вартість, $</th>
									<th>Кількість, шт</th>
									<th>Видалити</th>
								</tr>
								<?php foreach ($products as $product):?>
								<tr>
									<td><?= $product['code']?></td>
									<td><a href="/product/<?= $product['id']?>"><?= $product['name']?></a></td>
									<td><?= $product['price']?></td>
									<td><?= $productsInCart[$product['id']]?></td>
									<td><a href="/cart/delete/<?= $product['id']?>"><i class="fa fa-times"></i></a></td>
								</tr>
								<?php endforeach; ?>
								<tr>
									<td colspan="4">Загальна вартість, </td>
									<td><?= $totalPrice?></td>
								</tr>

							</table>
							<a class="btn btn-default checkout" href="/cart/checkout">
								<i class="fa fa-shopping-cart"></i> Оформити замовлення</a>
						<?php else:?>
							<p>Кошик порожній</p>
							<a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart">
								</i> Повернутися до покупок</a>
						<?php endif; ?>

					</div>




				</div>
			</div>
		</div>
	</section>

<?php include ROOT.'/views/layouts/footer.php'?>