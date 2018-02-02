<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Madlibs</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <h1>Mad Libs</h1>
    <article>
      Er heerst paniek...
      Onkunde
    </article>
    <main>
      <form action="onkunde.php" method="post">
      <aside>
        <input type="text" name="name">
        <input type="text" name="persoon">
        <input type="text" name="land">
        <input type="text" name="verveel">
        <input type="text" name="speelgoed">
        <input type="text" name="spijbel">
        <input type="text" name="kopen">
        <input type="text" name="bezigheid">
        <button type="submit">Verstuur</button>
      </aside>
        <p>Welk dier zou je nooit als huisdier willen hebben?</p>
        <p>Wie is de belangrijkste persoon in je leven?</p>
        <p>In welk land zou je graag willen wonen?</p>
        <p>Wat doe je als je je verveelt?</p>
        <p>Met welk speelgoed speelde je als kind het meest?</p>
        <p>Bij welke docent spijbel je het liefst?</p>
        <p>Als je € 100.000,- had, wat zou je dan kopen?</p>
        <p>Wat is je favoriete bezigheid?</p>
      </form>
    </main>
    <footer>
      <p>Deze website is gemaakt door <?php echo $_POST['spijbel'];?></p>
    </footer>
  </body>
</html>
