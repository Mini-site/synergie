<!DOCTYPE html>
<html>
     <head><!--------------------------------------------------------- Entête HTML====================================================== -->
         <meta charset='UTF-8' />
		 <title> message </title>
         <link rel='stylesheet' href='styles.css'/>
     </head>
     <body>
      	   						 
			<h1><?php $date = date("d-m-Y H:i:s");
                 list($finDate,$finHeure) = preg_split('/ /',$date);
                 list($finAnnee,$finMois,$finJr) = preg_split('/-/',$finDate);
                 list($finHrs,$finMin) = preg_split('/:/',$finHeure);
                 echo 'Message reçu le '.$finDate.' à '.$finHeure;?></h1>
			
			<p><?php echo $_POST ['nom']; ?></p>
			<p><?php echo $_POST ['prénom']; ?></p>
			<p><?php echo $_POST ['email']; ?></p>
			<p><?php echo $_POST ['tel']; ?></p>
			<p><?php echo $_POST ['votre message']; ?></p>
			
	 <a href="index.html">Retour à la page d'acceuil</a>	   
     </body>
</html>
 
