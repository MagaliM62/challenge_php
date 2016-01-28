<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="main.css">
  <title></title>
<img id="bandeau"src="jeux_videos.jpg">

</head>
<body>


  <?php

  $game= array("Call of duty", "Mario", "Final fantasy", "Dirt Rally","Rainbow six", "Prince of Persia", "Fifa", "Tomb Raider","Modern warfare", "Sonic", "The witcher","GTA");
  $nombre = count($game);

  /* print_r($game);
  echo '<br>';
  var_dump($game); */

  function table($name){
    echo '
    <tr><td>'.$name.'</td></tr>';
  }
  echo '<table id="mytable" class="table hover"><thead><tr><th>Top des jeux Vidéos</th></tr></thead><tbody>';

  for ($i=0; $i< $nombre; $i++)
  {table($game[$i]); }
  ?>

</tbody>
</table>

<script type="text/javascript" src="https://cdn.datatables.net/s/dt/dt-1.10.10/datatables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<script>$(document).ready(function(){
  $('#mytable').DataTable();
});</script>
</body>
</html>
