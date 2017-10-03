<?php 

include '../view/partials/header.php';

include '../view/partials/sidenav.php';
?>

<figure class="row">
<img src="img/moi.png" alt="moi" class="mypicture   img-fluid rounded-circle mx-auto d-block col-5 col-sm-3 col-md-2 ">
</figure>

<div class="container d-flex justify-content-between">
    <section class="text-center" >
    <h3 class="text-danger" name="top">Apprenant développeur web chez <u>Simplon</u></h3>
    <p class="text-white">Salut! je m'appelle <strong>Vincent</strong> , j'ai 21 ans , je suis en cour de formation de developpement web chez <u>Simplon</u> .
    <strong>Mes Passions</strong> sont : Jeux vidéo , Informatique , Sport plus particulierement <u>Musculation</u> . </p>
    <h3 class="text-danger">Mes Compétences Actuel</h3>
    <img src="img/languages.png" alt="les languages code" class="img-fluid">
  </section>
</div>

<div class="w-50 mx-auto">
	 <div class="progress">
		  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
		  aria-valuemin="0" aria-valuemax="100" style="width:90%">
		    html 90%
		  </div>
	 </div>

	<div class="progress">
	  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
	  aria-valuemin="0" aria-valuemax="100" style="width: 80%">
	    css 80%
	  </div>
	</div>

	<div class="progress">
	  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
	  aria-valuemin="0" aria-valuemax="100" style="width:15%">
	    js 15%
	  </div>
	</div>

	<div class="progress">
	  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
	  aria-valuemin="0" aria-valuemax="100" style="width:30%">
	    php 30% en cour...
	  </div>
	</div> 
</div>



<div id="retour-top">
   <a href="#top"><i class="material-icons fixed-bottom text-white mx-5 my-5 bg-warning img-circle ">arrow_upward</i></a>
</div>

<?php 
include '../view/partials/footer.php';

 ?>