<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chapter 1 - Flowcharts</title>
    <!-- own css -->
    <link rel="stylesheet" type="text/css" href="/e-learning/public/assets/css/style.css">
    <!-- bar/nav css -->
    <link rel="stylesheet" href="/e-learning/public/assets/css/bar.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style type="text/css">
		h1,h2,h3,h4,h5,h6{
			color:var(--bg-primary);
		}

		.scale{
			transition: var(--transition-speed);
		}

		.scale:hover{
			transform: scale(1.1);
		}
    </style>
  </head>
  <body>
  	<div class="progress-container">
  		<div class="progress-bars" id="progressBar"></div>
  	</div>

  	<!-- sidenav -->
  	<nav class="side-bar text-light">
		  <a class="text-center text-light mb-5 scale"href="/e-learning/public/dashboard">Go back <i class="fas fa-hand-point-left"></i></a>
  		<!-- accordions -->
  		<div class="accordion" id="accordionExample">
  			<!-- Chapter 1 -->
		  <div class="accordion-item">
		    <h2 class="accordion-header" id="headingOne">
		      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		        Chapter-1
		      </button>
		    </h2>
		    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
				<ol class="list-group">
					<li class="list-group-item"><a href="">Flowcharts</a></li>
						
					<li class="list-group-item" ><a href="">Algorithms</a></li>
				</ol>
		      </div>
		    </div>
		  </div>

		</div>
		<div class="accordion-item">
		    <h2 class="accordion-header" id="headingTwo">
		      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
		        Chapter-2
		      </button>
		    </h2>
		    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
			  <ol class="list-group">
					<li class="list-group-item"><a href="" class="btn disabled">Not yet</a></li>
						
					<li class="list-group-item" ><a href="" class="btn disabled">Not yet</a></li>
				</ol>
		      </div>
		    </div>
		  </div>

		</div>
	</nav>