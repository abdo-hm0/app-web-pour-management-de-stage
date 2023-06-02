<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{!! url("mystyle.css") !!}" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
		<div>Bienvenue</div>
	</header>
	<div class="nav-btn">Menu</div>



    <div class="sidebar">
        <nav>
            <a href="/profdashboard">Acceuil</a>
            <ul>
                <li><a href="/profdashboard">Tableau de Bord</a></li>
                <li class="active"><a href="/listestagiaires">Liste de stagiaires</a></li>
                <li><a href="registerstagiaire">Ajouter un stagiaire</a></li>
                <li><a href="affectetache">Ajouter une tâche</a></li>
            </ul>
        </nav>
    </div>




		<div class="main-content">
			<div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-13">
                        <div class="card my-5">
                            <div class="card-header bg-white text-center p-3">
                                <h3 class="text-dark">
                                    Profile : {{$stagiaire->Nom}}
                                </h3>
                            </div>
                            <div class="card-body">

                                <hr>
                                <div class="form-group mb-3">
                                    <label for="fullname" class="form-label fw-bold">Nom</label>
                                    <div class="border border-secondary rounded p-2">
                                        {{$stagiaire->Nom}}
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fullname" class="form-label fw-bold">Prénom</label>
                                    <div class="border border-secondary rounded p-2">
                                        {{$stagiaire->Prénom}}
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fullname" class="form-label fw-bold">E-mail</label>
                                    <div class="border border-secondary rounded p-2">
                                        {{$stagiaire->email}}
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fullname" class="form-label fw-bold">Encadrant</label>
                                    <div class="border border-secondary rounded p-2">
                                        {{$stagiaire->Encadrant_nom}}
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="fullname" class="form-label fw-bold">Sujet de stage</label>
                                    <div class="border border-secondary rounded p-2">
                                        {{$stagiaire->sujet}}
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="fullname" class="form-label fw-bold">Numéro de téléphone</label>
                                    <div class="border border-secondary rounded p-2">
                                        {{$stagiaire->num}}
                                    </div>
                                </div>

                            </div>
                        </div>
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
