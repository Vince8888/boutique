<div class="checkout">
	<div class="title">
		<div class="wrap">
		<h2 class="first">Shopping Cart</h2>
		</div>
	</div>
	<form method="post" action="panier">
	<div class="table">
		<div class="wrap">

			<div class="rowtitle">
				<span class="name">Product name</span>
				<span class="price">Price</span>
				<span class="quantity">Quantity</span>
				<span class="subtotal">Prix avec TVA</span>
				<span class="action">Actions</span>
			</div>

            {foreach from=$allArticles item=article}
			<div class="row">
				<a href="#" class="img"> <img src="{$article->get_imageArticle()}" height="53"></a>
				<span class="name">{$article->get_nomArticle()}</span>
				<span class="price">{$article->get_prixArticle()} €</span>
				<span class="quantity"><input type="text" name="panier[quantity][{$article->get_idArticle()}]" value="{$panier->quantite({$article->get_idArticle()})}"></span>
				<span class="subtotal">{$article->get_prixArticle()} €</span>
				<span class="action"><a href="sup_art_panier&{$article->get_idArticle()}" class="del"><img src="view/web/img/del.png"></a></span>
			</div>
			{/foreach}
			<div class="rowtotal">
				Grand Total : <span class="total">{$panier->total()}  € </span>
			</div>
			<input type="submit" value="Recalculer">
		</div>
	</div>
	</form>
</div>