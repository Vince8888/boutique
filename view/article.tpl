<div class="home">
	<div class="row">
		<div class="wrap">
			
			{foreach from=$allArticles item=article}
				<div class="box">
					<div class="product full">
						<a href="#">
							<img src={$article->get_imageArticle()} width="261" height="255">
						</a>
						<div class="description">
							{$article->get_nomArticle()}
							<a href="#" class="price">{$article->get_prixArticle()} €</a>
						</div>
						<a href="addpanier&{$article->get_idArticle()}" class="gift addPanier">
							Gift
						</a>
						<div class="rating">
							<span>Rating :</span>
							<ul>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#" class="off">5</a></li>
							</ul>
						</div>
						<a class="add" href="addpanier&{$article->get_idArticle()}">
							add
						</a>
					</div>
				</div>
			 {/foreach}
		</div>
	</div>
</div>
