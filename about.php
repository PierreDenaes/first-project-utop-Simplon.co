<!--About-->
		<div class="row section1" id="About">
			<div class="col-12 col-sm-12 col-md-12 col-lg-5 photoCvCont text-center">
				<?php if(isset($_SESSION['flash'])): ?>
        		<?php foreach($_SESSION['flash'] as $type => $message): ?>
            	<div class="alertP alert alert-<?= $type; ?>">
                <?= $message; ?>
            	</div>
        		<?php endforeach; ?>
        		<?php unset($_SESSION['flash']); ?>
    			<?php endif; ?>
				<img src="images/cv.png" alt="photo de Pierre Denaes" class="photoCv">
			</div> 	
			<div class="col-12 col-sm-12 col-md-12 col-lg-7 section1P">
				<h1>PIERRE DENAËS</h1>
				<h2>DÉVELOPPEUR WEB JUNIOR</h2>
				<p>Bonjour, ayant réalisé plusieurs certifications depuis un an sur FreeCodeCamp et OpenClassRoom
				je suis depuis début septembre 2019 en formation "Web Développeur" avec UTOPLAB (La Ciotat) et l'école Simplon. Je recherche
				aujourd'hui un premier stage en entreprise.</p>
				<div class=" d-flex d-inline-flex mb-1">
					<div class="blockIcon">
					<a class="btn btn-light btn-outline-pinky btnCv" href="documents/Web-Dev-Junior.pdf" target="_blank" role="button">Télécharger CV</a>
					</div>
					<div class="blockIconButt ml-4">
					<a href="https://github.com/PierreDenaes/" class="text-pinky" target="_blank">
	                <i class="fab fa-3x fa-github fa-github-mint"></i></a>
	                </div>
	                <div class="blockIconButt ml-4">
	              	<a href="https://www.linkedin.com/in/pierre-dena%C3%ABs-0b4a7a61/" class="text-pinky" target="_blank">
	              	<i class="fab fa-3x fa-linkedin fa-linkedin-mint"></i></a>
	              	</div>
              	</div>
			</div>
		</div>