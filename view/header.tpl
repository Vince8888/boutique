<!DOCTYPE html>
<html lang="fr">
<head>
        <title>LineshoP</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="view/web/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
        <link rel="icon" type="img" href="view/web/img/favicon.ico" />
        <!-- On importe jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>
<body>

<div id="header">
	<div class="wrap">
		<div class="menu">
				<a href="index" class="logo">LineshoP</a>
				<h1>The best online store, for real.</h1>
				<ul class="panier">
					<li class="caddie"><a href="panier">Caddie</a></li>
					<li class="items">
						ITEMS
						<span id="count">{$panier->count()}</span>
					</li>
					<li class="total">
						TOTAL
						<span><span id="total">{$panier->total()}</span> €</span>
					</li>
				</ul>
		</div>
	</div>
</div>

<div id="subheader">
	<div class="wrap">
		<h2>Welcome 
                {if isset($logUser)}{$logUser} you can <a href="logout">logout</a> 
                {else}<a href="login">login</a>{/if} .</h2>
	</div>
</div>


<div id="wrap">

	<div id="menu">
		<ul class="wrap">
			<li> <a href="#">All Categories</a> </li>
			<li> <a href="#">Consoles</a> </li>
			<li> <a href="#">Jeux</a> </li>
		</ul>
	</div>
	<div id="ariane">
		<div class="wrap">		You are right here : Home » <a href="#">Electronics</a>
		</div>
	</div>
	<div id="main" class="clearfix">
