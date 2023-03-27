
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
	<meta name="description" content="Twój Opis">
	<meta name="author" content="Twoje dane">
	<meta name="keywords" content="Twoje słowa kluczowe">
	<title>Twoje nazwisko</title>
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
   midi-player button:not(.play) {
    display: none;
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
		
       <!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style_piano.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
  </head>
  <body>
    <div class="wrapper">
      <header>
        <h2>Playable PIANO</h2>
        <div class="column volume-slider">
          <span>Volume</span><input type="range" min="0" max="1" value="0.5" step="any">
        </div>
        <div class="column keys-checkbox">
          <span>Show Keys</span><input type="checkbox" checked>
        </div>
      </header>
      <ul class="piano-keys">
        <li class="key white" data-key="a"><span>a</span></li>
        <li class="key black" data-key="w"><span>w</span></li>
        <li class="key white" data-key="s"><span>s</span></li>
        <li class="key black" data-key="e"><span>e</span></li>
        <li class="key white" data-key="d"><span>d</span></li>
        <li class="key white" data-key="f"><span>f</span></li>
        <li class="key black" data-key="t"><span>t</span></li>
        <li class="key white" data-key="g"><span>g</span></li>
        <li class="key black" data-key="y"><span>y</span></li>
        <li class="key white" data-key="h"><span>h</span></li>
        <li class="key black" data-key="u"><span>u</span></li>
        <li class="key white" data-key="j"><span>j</span></li>
        <li class="key white" data-key="k"><span>k</span></li>
        <li class="key black" data-key="o"><span>o</span></li>
        <li class="key white" data-key="l"><span>l</span></li>
        <li class="key black" data-key="p"><span>p</span></li>
        <li class="key white" data-key=";"><span>;</span></li>
      </ul>
        


    </div>
     <midi-player id="cbat1"
  src="wlasne_utwory/cbat1.mid"
  sound-font visualizer="#myVisualizer">
</midi-player>
    <midi-player id="cbat2"
  src="wlasne_utwory/cbat2.mid"
  sound-font visualizer="#myVisualizer">
</midi-player>
    <midi-player id="cbat3"
  src="wlasne_utwory/cbat3.mid"
  sound-font visualizer="#myVisualizer">
</midi-player><br>
    <center> <button onclick="loop()">Loop</button></center>
      <br><br><br>
       <center><midi-visualizer type="staff" id="myVisualizer"></midi-visualizer></center>
  </body>
   <script>
  function loop() {
   document.getElementById('cbat1').loop = !document.getElementById('cbat1').loop;
    document.getElementById('cbat2').loop = !document.getElementById('cbat2').loop;
    document.getElementById('cbat3').loop = !document.getElementById('cbat3').loop;
  }
     var allNotes = [];
     const pianoKeys = document.querySelectorAll(".piano-keys .key"),
volumeSlider = document.querySelector(".volume-slider input"),
keysCheckbox = document.querySelector(".keys-checkbox input");
var allKeys = [],
audio = new Audio(`tunes/a.wav`); 
const playTune = (key) => {
    audio.src = `tunes/${key}.wav`; // passing audio src based on key pressed 
    audio.play(); // playing audio
    const clickedKey = document.querySelector(`[data-key="${key}"]`); // getting clicked key element
    clickedKey.classList.add("active"); // adding active class to the clicked key element
    setTimeout(() => { // removing active class after 150 ms from the clicked key element
        allNotes.push(clickedKey.innerText);
        clickedKey.classList.remove("active");
    }, 150);
}
pianoKeys.forEach(key => {
    allKeys.push(key.dataset.key); // adding data-key value to the allKeys array
    // calling playTune function with passing data-key value as an argument
    key.addEventListener("click", () => playTune(key.dataset.key));
});

function playSequence() {
  allNotes.forEach(key => {
    
     setTimeout(() => { // removing active class after 150 ms from the clicked key element
        audio.src = `tunes/${key}.wav`;; // passing audio src based on key pressed 
    audio.play(); // playing audio
    }, 1500);
    
   
    //alert(key);
  });

}

const handleVolume = (e) => {
    audio.volume = e.target.value; // passing the range slider value as an audio volume
}
const showHideKeys = () => {
    // toggling hide class from each key on the checkbox click
    pianoKeys.forEach(key => key.classList.toggle("hide"));
}
const pressedKey = (e) => {
    // if the pressed key is in the allKeys array, only call the playTune function
    if(allKeys.includes(e.key)) {
     //allNotes.add(e.key);
      playTune(e.key);
     
    }
}



keysCheckbox.addEventListener("click", showHideKeys);
volumeSlider.addEventListener("input", handleVolume);
document.addEventListener("keydown", pressedKey);
playBtn.addEventListener("click", playSequence);


    </script>
</html>
          
          
		</section>
	</main>	
		
</body>
</html>