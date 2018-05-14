<?php
require "pages/Templates/Header.php";
//Create
createVideo($nr =1, $name='movie1', $type='movie', $description='a great movie', $origin='Merica', $rating=3, $duration=60);
createVideo($nr =2, $name='serie1', $type='serie', $description='a great serie', $origin='India', $rating=4, $duration=43);
createVideo($nr =3, $name='serie2', $type='serie', $description='a great serie sorta', $origin='Merica', $rating=3, $duration=30);
createVideo($nr =4, $name='movie2', $type='movie', $description='a bad movie', $origin='Merica', $rating=3, $duration=60);
//Vraag de lijst van videos op
showVideo($main);
//roep delete aan
deleteVideoFromListByNr($delete=1);

//create function
function createVideo($nr, $name, $type, $description, $origin, $rating, $duration){
    $video = array($nr, $name, $type, $description, $origin, $rating, $duration);
    addVideoToList($video);
}

//add create to $main[]
function addVideoToList ($video){
  global $main;
  var_dump("added a video with the name: ".$video[1]);
  $place = $video[0]-1;
  $main[$place] = $video;
  array_push($main, $video);
}

function showVideo($main){
  echo "showVideo is aangeroepen";
  var_dump($main);
}

//delete uit $main[] waar $nr is 1
function deleteVideoFromListByNr($delete){
  echo('delete word aangeroepen');
  foreach($main as $index => $item){
    if($item[[0]]==$delete){
      unset($main[$index]);
      var_dump($main);
    }
  }
}

?>


<?php
require "pages/Templates/footer.php";
?>
