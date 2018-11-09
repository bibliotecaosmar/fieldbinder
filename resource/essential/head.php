<!--Header-->
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Fieldbinder</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
            <script src="js/functions.js"></script>
        </head>
        <body>
            <header>
                <nav>
                    <div id="logo"> 
                        <!--Logo-->
                        <p>fieldbinder</p>
                    </div>
                    <form id="tabs" method="post">
                        <input id="Index" type="submit" hidden="value" name="view" value="index"/><label for="Index"><?php echo $this->index ?></label>
                        <input id="Plant" type="submit" hidden="value" name="view" value="plant"/><label for="Plant"><?php echo $this->plant ?></label>
                        <input id="Animal" type="submit" hidden="value" name="view" value="animal"/><label for="Animal"><?php echo $this->animal ?></label>
                        <input id="Insect" type="submit" hidden="value" name="view" value="insect"/><label for="Insect"><?php echo $this->insect ?></label>
                        <input id="Mushroom" type="submit" hidden="value" name="view" value="mushroom"/><label for="Mushroom"><?php echo $this->mushroom ?></label>