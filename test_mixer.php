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
      midi-visualizer {
      max-width:1000px;
      padding-left:25%;
      }
      .cover {
      float:left;
      padding-left:40%;
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
          <h1>TEST MIX</h1>
        </center>
        <br>
        <h2>Dodaj utwór do listy:</h2>
        <form name="formAdd" id="formAdd" method="POST" action="upload.php" enctype="multipart/form-data">
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit">
        </form>
        <br>
        <center>
          <h2>Wybierz utwory do mixa</h2>
          <br>
          <select name="file" id="utwor1">
            <option value="nothing.mp3">BRAK</option>
            <?php
              $files = glob("nowe_utwory/*.{mp3}", GLOB_BRACE);
              foreach($files as $file)
              {
                  echo '<option value="nowe_utwory/' .basename($file) . '">' . basename($file) . '</option>';
              }
              ?>
          </select>
          <select name="file" id="utwor2">
            <option value="nothing.mp3">BRAK</option>
            <?php
              $files = glob("nowe_utwory/*.{mp3}", GLOB_BRACE);
              foreach($files as $file)
              {
                  echo '<option value="nowe_utwory/' .basename($file) . '">' . basename($file) . '</option>';
              }
              ?>
          </select>
          <select name="file" id="utwor3">
            <option value="nothing.mp3">BRAK</option>
            <?php
              $files = glob("nowe_utwory/*.{mp3}", GLOB_BRACE);
              foreach($files as $file)
              {
                  echo '<option value="nowe_utwory/' .basename($file) . '">' . basename($file) . '</option>';
              }
              ?>
          </select>
          <select name="file" id="utwor4">
            <option value="nothing.mp3">BRAK</option>
            <?php
              $files = glob("nowe_utwory/*.{mp3}", GLOB_BRACE);
              foreach($files as $file)
              {
                  echo '<option value="nowe_utwory/' .basename($file) . '">' . basename($file) . '</option>';
              }
              ?>
          </select>
          <button class="w-100 btn btn-lg btn-primary" onclick="mix()">Mix</button>
          <br>
          <br>
          <div id="app">
            <div>
              <div style="text-align: center;">
                <div style="position:relative; display: inline-block; ">
                  <vue-audio-mixer 
                    :config="config" 
                    size="medium" 
                    theme="dark" 
                    :show-pan="true"
                    :show-total-time="true"
                    />
                </div>
              </div>
            </div>
          </div>
        </center>
        <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
        <script src="https://unpkg.com/vue-audio-mixer/dist/vue-audio-mixer.min.js"></script>
        <script>
          var file = document.getElementById("audio-file1");
          const audio = new Audio();
          
          
           function mix(){
          const app = new Vue({
           el: '#app',
           data : function(){     
             return {
               is_loaded:false,
               newconfig:{},
               config:
          {
          "tracks": [
          {
           "title": "Track 1",
           "url": document.getElementById('utwor1').value,
           "pan": -30,
           "gain": 0.5,
           "muted": false,
           "hidden": false
          }, {
           "title": "Track 2",
           "url": document.getElementById('utwor2').value,
           "pan": -30,
           "gain": 0.5,
           "muted": false,
           "hidden": false
          }, {
           "title": "Track 3",
           "url": document.getElementById('utwor3').value,
           "pan": -30,
           "gain": 0.5,
           "muted": false,
           "hidden": false
          }, {
           "title": "Track 4",
           "url": document.getElementById('utwor4').value,
           "pan": -30,
           "gain": 0.5,
           "muted": false,
           "hidden": false
          }
          
          
          ],
          "master": {
          "pan": 0,
          "gain": 1,
          "muted": false
          }
          }
          
                 
               }  
             }
           })
               }
        </script>
      </section>
    </main>
  </body>
</html>