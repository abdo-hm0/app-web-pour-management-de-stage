<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{!! url("mystyle.css") !!}" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
		<div>Bienvenu</div>
	</header>
	<div class="nav-btn">Menu</div>
	<div class="container">

        <div class="sidebar">
            <nav>
                <a href="/profdashboard">Acceuil</a>
                <ul>
                    <li class="active"><a href="/profdashboard">Tableau de Bord</a></li>
                    <li><a href="/listestagiaires">Liste de stagiaires</a></li>
                    <li><a href="registerstagiaire">Ajouter un stagiaire</a></li>
                    <li><a href="affectetache">Ajouter une tâche</a></li>
                </ul>
            </nav>
        </div>

		<div class="main-content">
			<h1> {{ $info['Nomcomplet'] }}</h1>
			<p> Bienvenue </p>
			<div class="panel-wrapper">
				<div class="panel-head">

				</div>
				<div class="panel-body">

				</div>
			</div>
		</div>
	</div>

    <script>
        $(document).ready(function() {
	$('.nav-btn').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('.sidebar').slideToggle('fast');

		window.onresize = function(){
			if ($(window).width() >= 768) {
				$('.sidebar').show();
			} else {
				$('.sidebar').hide();
			}
		};
	});
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
