<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/accueil_style.css">
</head>
<body>
<?php error_reporting(0); ?>
	<div id='contener_logo'>
		<img src="images/logo_ARC.png">
	</div>
		<div id='contener'>

			<ul id='bloc_accueil'>
				<li>
					<a href="principal.php">
						<div class='icon'><span class='LigatureSymbols'>home</span></div>
						<div class='content'>
							<h2>Accueil</h2>
							<div class='diagonale'>
							</div>
						</div>	
					</a>
				</li>
			</ul>

			<ul id='bloc_prestations'>
				<li>
					<a href="#">
						<div class='icon'><span class='LigatureSymbols'>memo</span></div>
						<div class='content'>
							<h2>Prestations</h2>
							<div class='diagonale'>
							</div>
						</div>
					</a>	
				</li>
			</ul>
			
			<ul id='bloc_produits'>
				<li>
					<a href="#">
						<div class='icon'><span class='LigatureSymbols'>server</span></div>
						<div class='content'>
							<h2>Produits</h2>
							<div class='diagonale'>
							</div>
						</div>
					</a>	
				</li>
			</ul>

			<ul id='bloc_partenaires'>
				<li>
					<a href="#">
						<div class='icon'><span class='LigatureSymbols'>group</span></div>
						<div class='content'>
							<h2>Partenaires</h2>
							<div class='diagonale'>
							</div>
						</div>
					</a>	
				</li>
			</ul>

			<ul id='bloc_contact'>			
				<li>
					<a href="#">
						<div class='icon'><span class='LigatureSymbols'>mail</span></div>
						<div class='content'>
							<h2>Contact</h2>
							<div class='diagonale'>
							</div>
						</div>
					</a>	
				</li>
			</ul>

			<ul id='bloc_webmail'>
				<li>
					<a href="#">
						<div class='icon'><span class='LigatureSymbols'><strong>@</strong></span></div>
						<div class='content'>
							<h2>Webmail</h2>
							<div class='diagonale'>
							</div>
						</div>
					</a>	
				</li>
			</ul>
		</div>
		<div class='inter_bloc_accueil'></div>
		<div id='footer_accueil'>
			<?php include('includes/footer.php'); ?>
		</div>	
</body>
</html>