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
		<div>Bienvenue</div>
	</header>
	<div class="nav-btn">Menu</div>
	<div class="container">


        <div class="sidebar">
            <nav>
                <a href="/dashboard">Accueil</a>
                <ul>
                    <li ><a href="/dashboard">Tableau de Bord</a></li>
                    <li class="active"><a href="/studentprofile">Profile</a></li>
                    <li><a href="/studenttache">Tâches</a></li>

                </ul>
            </nav>
        </div>



		<div class="main-content">
			<h1>Votre Profile</h1>
			<div class="panel-wrapper">
				<div class="panel-head">
					Profile
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
                        <tr>
                          <th width="30%">Nom</th>
                          <td width="2%">:</td>
                          <td>{{ $data->Nom }}</td>
                        </tr>
                        <tr>
                          <th width="30%">  Prénom	</th>
                          <td width="2%">:</td>
                          <td>{{ $data->Prénom }}</td>
                        </tr>
                        <tr>
                          <th width="30%">E-mail</th>
                          <td width="2%">:</td>
                          <td>{{ $data->email }}</td>
                        </tr>
                        <tr>
                          <th width="30%">Encadrant</th>
                          <td width="2%">:</td>
                          <td>{{ $data->Encadrant_nom }}</td>
                        </tr>

                        <tr>
                            <th width="30%">Sujet</th>
                            <td width="2%">:</td>
                            <td>{{ $data->sujet }} </td>
                          </tr>

                          <tr>
                            <th width="30%">Numéro de téléphone</th>
                            <td width="2%">:</td>
                            <td>{{ $data->num }}</td>
                          </tr>


                      </table>


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

















