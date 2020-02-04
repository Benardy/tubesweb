<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <title>@yield('title')</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="{{ url('/index') }}"><b>PENGGAJIAN</b></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			</ul>	
		    <form class="form-inline ml-5 my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
	  	</div>
	</nav>

	
	
	
	<div class="row mx-auto no-gutters">
	    <div class="col-md-2 bg-light">
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><a class="hadir text-dark" href="">Kehadiran</a></li>
				<li class="list-group-item"><a class="tunjangan text-dark" href="">Tunjangan</a></li>
				<li class="list-group-item"><a class="jabatan text-dark" href="{{ url('/jabatan')}}">Jabatan</a></li>
				<li class="list-group-item"><a class="potongan text-dark" href="{{ url('/potongan')}}">Potongan</a></li>
				<li class="list-group-item"><a class="lembur text-dark" href="{{ url('/lembur')}}">Lembur</a></li>
				<li class="list-group-item"><a class="gajiLain text-dark" href="">Gaji Lainnya</a></li>
				<li class="list-group-item"><a class="report text-dark" href="">Report</a></li>
				<li class="list-group-item"></li>
			</ul>
	    </div>

    	@yield('col')

	</div>

	    

    





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>