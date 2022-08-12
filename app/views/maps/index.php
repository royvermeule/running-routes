<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
    <body id="background-planning-run1">
        <header id="header-type1">
            <div>
                <h1 id="title-maplist">
                    Maps
                </h1>
            </div>
        </header>
        <main id="main-type2">
            <div id="links-maplist">
                <div id="links-maplist-settings">
                <table>
                    <thead>
                        <th>Naam</th>
                        <th>Lengte</th>
                        <th>Terrein</th>
                        <th>Beschrijving</th>
                        <th>Map</th>
                    </thead>
                        <tbody>
                            <h3 id="h3-mapinfo">
                                <?=$data['mapinfo'];?> 
                            </h3>
                        </tbody>
                    </table>
                </div>              
            </div>
        </main>
        <footer id="footer-type2">
            <div id="returnto-dashboard">
                <a href="<?=URLROOT;?>/homepages/index">Terug</a>
            </div>
        </footer>
    
</body>

</html>