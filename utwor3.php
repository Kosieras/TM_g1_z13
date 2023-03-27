<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Twój Opis">
    <meta name="author" content="Twoje dane">
    <meta name="keywords" content="Twoje słowa kluczowe">
    <title>Kosierkiewicz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <style type="text/css" class="init"></style>
    <link rel="stylesheet" type="text/css" href="twoj_css.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="twoj_js.js"></script> 
    <script src="https://cdn.jsdelivr.net/combine/npm/tone@14.7.58,npm/@magenta/music@1.23.1/es6/core.js,npm/focus-visible@5,npm/html-midi-player@1.5.0"></script>
    <style>
      body {
      max-width:1000px; 
      }
      midi-visualizer {
      padding-left:100px;
      padding-top:50px;
      max-width:1000px;
      }
      .all {
      }
      .cover {
      float:left;
      padding-left:10%; 
      }
      .original {
      float:left; 
      padding-left:10%;
      }
    </style>
  </head>
  <body onload="myLoadHeader()">
    <div id='myHeader'> </div>
    <main>
      <section class="sekcja1">
        <center>
          <h1>Utwór 3</h1>
        </center>
        <br>
        <h3>Zespół muzyczny: Elektryczne Gitary</h3>
        <br>
        <h3>Nazwa utworu: Nie pij Piotrek</h3>
        <br>
        <div id="original" class="original">
          <h1>Oryginalny utwór</h1>
          <center>
            <h2>MP3</h2>
            <br>
            <audio controls src="wlasne_utwory/elektryczne_gitary_original.mp3"><a href="wlasne_utwory/elektryczne_gitary_original.mp3">Download audio</a></audio>
            <br>
            <h2>MIDI</h2>
          </center>
          <midi-player
            src="wlasne_utwory/elektryczne_gitary_original.mid"
            sound-font visualizer="#myVisualizer"></midi-player>
        </div>
        <div id="all" class="all">
          <div id="cover" class="cover">
            <center>
              <h1>Cover</h1>
              <h2>MP3</h2>
              <br>
              <audio controls src="wlasne_utwory/elektryczne_gitary.mp3"><a href="wlasne_utwory/elektryczne_gitary.mp3">Download audio</a></audio>
              <br>
              <h2>MIDI</h2>
              <midi-player
                src="wlasne_utwory/elektryczne_gitary.mid"
                sound-font visualizer="#myVisualizer"></midi-player>
            </center>
          </div>
        </div>
        <br><br><br>
        <center>
          <div style="float:left">
            <midi-visualizer type="piano-roll" id="myVisualizer"></midi-visualizer>
          </div>
        </center>
      </section>
    </main>
  </body>
</html>