<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/earth.png" type="image">

    <?php
        $xmldata = simplexml_load_file("XML.xml") or die("Failed to load");
    ?>

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
                <a href="o_nama.html">O nama</a>
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
						    <figcaption class="figure-title"> Svemirski kamen </figcaption>
					    </figure>
                </div>

                <div class="col-8">
                    <p>
                    <?php echo $xmldata->employee[0]->firstname. ?>
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
