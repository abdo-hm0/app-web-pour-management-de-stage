<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! url("mystyle.css") !!}">
    <link rel="stylesheet" href="{!! url("boutons.css") !!}">

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
			<p> Bienvenue </p>
			<div class="panel-wrapper">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-10 mx-auto">
                            <div class="card my-5">
                                <div class="card-header">
                                    <div class="text-center text-uppercase">
                                            Stagiaires
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="myTable" class="table table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>E-mail</th>
                                                <th>Encadrant</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($stagiaires as $stagiaire)
                                            <tr>
                                                <td>{{ $stagiaire->Nom }}</td>
                                                <td>{{ $stagiaire->Prénom }}</td>
                                                <td>{{ $stagiaire->email }}</td>
                                                <td>{{ $stagiaire->Encadrant_nom }} </td>
                                                <td class="d-flex justify-content-center align-items-center">
                                                    <a href = "show/{{$stagiaire->id}}" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-eye fa-lg"></i>

                                                    <a href = "delete/{{$stagiaire->id}}" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash fa-lg"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


			</div>
		</div>














    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>



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




<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>


</body>

</html>



