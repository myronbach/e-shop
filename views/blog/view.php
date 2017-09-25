<?php include ROOT.'/views/layouts/header.php' ?>

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
										<h4 class="panel-title"><a href="/category/<?= $categoryItem['id']?>">
												<?= $categoryItem['name']?></a></h4>
									</div>
								</div>
							<?php endforeach;?>

						</div><!--/category-products-->


						<div class="shipping text-center"><!--shipping-->
							<img src="/template/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Запис у блозі</h2>


							<div class="single-blog-post">
								<h3><?= $blogItem['title']?></h3>
								<div class="post-meta">
									<ul>
										<li><i class="fa fa-calendar"></i><?=$blogItem['date'] ?></li>

									</ul>
								</div>
								<a href="/blog/<?= $blogItem['id']?>">
									<img src="<?= $blogItem['preview']?>" alt="">
								</a>
								<p> <?= $blogItem['content']?></p>
								<div class="pager-area">
									<div class="pager pull-right">
										<a href="/blog">Назад у блог</a>
									</div>
								</div>
							</div>
							<hr>

						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include ROOT.'/views/layouts/footer.php'?>