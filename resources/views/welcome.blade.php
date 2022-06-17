<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>

<p>Bienvenue:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Requête GET</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Requête POST</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Requête DELETE</button>
</div>

<div id="London" class="tabcontent">
  <h3>GET</h3>
  <p>Vous pouvez des requêtes sur des backend apis ici.</p>
   <form method="post" action="/data">
    @csrf
    <div class="form-group">
        <input type="text" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez l'URL ">
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>

<div id="Paris" class="tabcontent">
  <h3>UPDATE</h3>
<p>Vous pouvez des requêtes sur des backend apis ici.</p>
    <form method="post" action="/update">
    @csrf
    <div class="form-group">
        <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id de l'élément">
    </div> <br>
    <div class="form-group">
        <input type="text" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez l'URL ">
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>DELETE</h3>
<p>Vous pouvez des requêtes sur des backend apis ici.</p>
<form method="post" action="/delete">
    @csrf
    <div class="form-group">
        <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id de l'élément">
    </div> <br>
    <div class="form-group">
        <input type="text" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez l'URL ">
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>
