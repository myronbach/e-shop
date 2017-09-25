<?php include ROOT.'/views/layouts/header.php'?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Каталог</h2>
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php foreach ($categories as $categoryItem):?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="/category/<?= $categoryItem['id'];?>">
											<?= $categoryItem['name']?></a></h4>
								</div>
							</div>
						<?php endforeach;?>

					</div><!--/category-products-->

				</div>
			</div>

			<div class="col-sm-9 padding-right">
				<div class="product-details"><!--product-details-->
					<div class="row">
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo Product::getImage($product['id'])?>" alt="" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?= $product['name']?></h2>
								<p><?= $product['code']?></p>
                                        <span>
                                            <span>US $<?= $product['price']?></span>
                                            <a href="#" data-id="<?php echo $product['id']; ?>"
                                               class="btn btn-default add-to-cart">
	                                            <i class="fa fa-shopping-cart"></i>В кошик
                                            </a>
                                        </span>
								<p><b>Наявність:</b> <?= ($product['availability'] == 1)? "на складі" : "немає"?></p>

								<p><b>Виробник:</b> <?= $product['brand']?></p>
							</div><!--/product-information-->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h5>Опис товару</h5>
							<?= $product['description']?>
						</div>
					</div>
				</div><!--/product-details-->

			</div>
		</div>
	</div>
</section>


<br/>
<br/>

<?php include ROOT.'/views/layouts/footer.php'?>