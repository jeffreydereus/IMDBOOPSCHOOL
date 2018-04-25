<?php
require "pages/Templates/Header.php";
//Create
createVideo($nr =1, $name='monty', $type='movie', $description='a great movie', $origin='Merica', $rating=3, $duration=60);
createVideo($nr =2, $name='phyton', $type='serie', $description='a great serie', $origin='India', $rating=4, $duration=43);

function createVideo($nr, $name, $type, $description, $origin, $rating, $duration){
    $video = array($nr, $name, $type, $description, $origin, $rating, $duration);
    addVideoToList($video);
}

function addVideoToList ($video){
  var_dump($video);
  $main[$nr-1] = $video;
}

?>

<?php
require "pages/Templates/footer.php";
?>
