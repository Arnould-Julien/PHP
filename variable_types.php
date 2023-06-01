<?php 
$_name = "Julien";
$_age = 22;
$_yeux = "bleu";
$_faim = false;

if ($_faim) {
    echo "<p> J'ai faim </p>" ;
} else {
    echo "<p> J'ai pas faim </p>" ;
}

$_famille = array(
    0 => 'Lisa',
    1 => 'Michel',
    2 => 'Karen',
    3 => 'Mamy',
    4 => 'Papy',
    );

?>
<p> Mon nom est <?php echo $_name; ?> </p> <p> j'ai <?php echo $_age; ?> ans </p>
<p> j'ai les yeux <?php echo $_yeux; ?> </p>
 
<p> La première personne de ma famille est <?php echo $_famille[0]; ?> </p>
<p> Mon père s'appelle  <?php echo $_famille[1]; ?> </p>
<p> Mon mère s'appelle  <?php echo $_famille[2]; ?> </p>





