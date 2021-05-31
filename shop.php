<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/earth.png" type="image">

    <?php $xmldata = simplexml_load_file("XML.xml") or die("Could not load file"); ?>

    <title>Vanzemaljko </title> 
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<figcaption class="display-2 text-center title"> Vanzemaljko</figcaption>
			</div>
		</div>
	</div>

    <div id="nav" class="container">
        <div class="row">
		    <div class="col-4">
                <a href="index.html">Početna</a>
            </div>
            <div class="col-4">
                <a href="shop.php">Dućan</a>
            </div>
            <div class="col-4">
                <a href="kontakt.html">Kontakt</a>
            </div>
        </div>
    </div>
 
    
    <main>
       
        <div class="container">
		<hr>
            <div class="row justify-content-md-center">
					
			<br>
                <div class="col-4">
                    <figure>
                        <img src="img/rock.jpg" class="rock">
						    <figcaption class="figure-title"> <?php echo $xmldata->predmet[0]->naziv; ?> </figcaption>
					    </figure>
                </div>

                <div class="col-8">
                    <p>
                    <?php echo $xmldata->predmet[0]->naziv; ?> <br>
                    Količina: <?php echo $xmldata->predmet[0]->kolicina; ?> <br>
                    Težina: <?php echo $xmldata->predmet[0]->tezina; ?> <br>
                    Opis: <?php echo $xmldata->predmet[0]->opis; ?> <br>
                    Cijena: <?php echo $xmldata->predmet[0]->cijena; ?>hrk
                    <figure>
                        <a href="" class="kont">Kupite</a>
					</figure>
                    </p>
                </div>
                <hr id="hr3">

                <div class="col-4">
                    <figure>
                        <img src="img/diamond.png" class="rock">
						    <figcaption class="figure-title"> <?php echo $xmldata->predmet[1]->naziv; ?> </figcaption>
					    </figure>
                </div>

                <div class="col-8">
                    <p>
                    <?php echo $xmldata->predmet[1]->naziv; ?> <br>
                    Količina: <?php echo $xmldata->predmet[1]->kolicina; ?> <br>
                    Težina: <?php echo $xmldata->predmet[1]->tezina; ?>ct <br>
                    Opis: <?php echo $xmldata->predmet[1]->opis; ?> <br>
                    Cijena: <?php echo $xmldata->predmet[1]->cijena; ?>hrk
                    <figure>
                        <a href="" class="kont">Kupite</a>
					</figure>
                    </p>
                </div>
                <hr id="hr3">

                <div class="col-4">
                    <figure>
                        <img src="img/astronaut.png" class="rock">
						    <figcaption class="figure-title"> <?php echo $xmldata->predmet[2]->naziv; ?> </figcaption>
					    </figure>
                </div>

                <div class="col-8">
                    <p>
                    <?php echo $xmldata->predmet[2]->naziv; ?> <br>
                    Količina: <?php echo $xmldata->predmet[2]->kolicina; ?> <br>
                    Težina: <?php echo $xmldata->predmet[2]->tezina; ?>kg <br>
                    Opis: <?php echo $xmldata->predmet[2]->opis; ?> <br>
                    Cijena: <?php echo $xmldata->predmet[2]->cijena; ?> Elon Musk
                    <figure>
                        <a href="" class="kont">Vratite nam Elona</a>
					</figure>
                    </p>

                </div>
                <hr id="hr3">
                <br>
            </div>
        </div>

    </main>

    <hr>
    <footer>
        <p class="footer">Vanzemaljko ©2021</p>
	</footer>

</body>
</html>
