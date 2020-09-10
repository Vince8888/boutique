<?php
class Panier{
    
	public function __construct(){
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
		}

		if(isset($_GET['delPanier'])){
			$this->del($_GET['delPanier']);
		}
		if(isset($_POST['panier']['quantity'])){
			$this->recalc();
		}
	}

	public function recalc(){
		foreach($_SESSION['panier'] as $product_id => $quantity){
			if(isset($_POST['panier']['quantity'][$product_id])){
				$_SESSION['panier'][$product_id] = $_POST['panier']['quantity'][$product_id];                              
			}
		}
	}
	public function quantite($id){
		return $_SESSION['panier'][$id];
	}
        
	public function count(){
		return array_sum($_SESSION['panier']);
	}

	public function total(){
		$total = 0;
		$ids = array_keys($_SESSION['panier']);
		if(empty($ids)){
			$products = array();
		}else{
                        $articleDAO = new ArticleDAO();
			$products = $articleDAO->getImplode($ids);
		}
		foreach( $products as $product ) {
			$total += $product->get_prixArticle() * $_SESSION['panier'][$product->get_idArticle()];
		}
                
		return $total;
	}

	public function add($product_id){
		if(isset($_SESSION['panier'][$product_id])){
			$_SESSION['panier'][$product_id]++;
		}else{
			$_SESSION['panier'][$product_id] = 1;
		}
	}

	public function del($product_id){
		unset($_SESSION['panier'][$product_id]);
	}

}