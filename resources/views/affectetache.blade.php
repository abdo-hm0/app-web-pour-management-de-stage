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
	<div class="container">
        <div class="sidebar">
            <nav>
                <a href="/profdashboard">Accueil</a>
                <ul>
                    <li><a href="/profdashboard">Tableau de Bord</a></li>
                    <li><a href="/listestagiaires">Liste de stagiaires</a></li>
                    <li><a href="registerstagiaire">Ajouter un stagiaire</a></li>
                    <li class="active"><a href="affectetache">Ajouter une tâche</a></li>
                </ul>
            </nav>
        </div>

		<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row my-1">
                        <div class="col-md-6 mx-auto">
                            @include('message.alert')
                        </div>
                    </div>
                    <div class="card my-1">
                        <div class="card-header bg-white text-center p-3">
                            <h3 class="text-dark">
                                Ajouter une tâche
                            </h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" class="mt-3" action="/registerhim" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="Nom" class="form-label fw-bold">Nom du stagiaire</label>
                                    <input type="text" name="Nom" value="{{old("Nom")}}" placeholder="Nom" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Prénom" class="form-label fw-bold">Prénom du stagiaire</label>
                                    <input type="text" name="Prénom" value="{{old("Prénom")}}" placeholder="Prénom" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label fw-bold" for="email">La tâche</label>
                                    <input type="text" name="email" value="{{old("email")}}"  placeholder="Description" class="form-control">
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Assigner La tâche') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>>
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

