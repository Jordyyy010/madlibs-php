
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Madlibs</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
  </head>
  <body>
    <h1>Mad Libs</h1>
    <article>
      <a href="index.html">Er heerst paniek...</a>
      <a href="onkunde.html">Onkunde</a>
    </article>
    <main>
      <h2>Er heerst paniek...</h2>
      <p>Er heerst paniek in het koninkrijk <?php echo $_POST['land'];?>.
      Koning <?php echo $_POST['spijbel']; ?> is ten einde raad en als koning <?php echo $_POST['spijbel'];?> ten einde raad is,
      dan roept hij zijn ten-einde-raadsheer <?php echo $_POST['persoon']; ?>.</p>
      <p>"<?php echo $_POST['persoon']; ?>! Het is een ramp! Het is een schande!"</p>
      <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
      <p>"Mijn <?php echo $_POST['name']; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST['speelgoed']; ?> voor hem gekocht!"</p>
      <p>"Majesteit, uw <?php echo $_POST['name']; ?> komt vast vanzelf terug?"</p>
      <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['bezigheid']; ?> leren?"</p>
      <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST['kopen']; ?> voor gebruiken."</p>
      <p>"<?php echo $_POST['persoon']; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
      <p>"<?php echo $_POST['verveel']; ?>, Sire."</p>
    </main>
    <footer>
      <p>Deze website is gemaakt door <?php echo $_POST['spijbel'];?></p>
    </footer>
  </body>
</html>
