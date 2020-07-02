<html>
    <p>
<?php
$date1 = new DateTime();
echo $date1->format('d/m/Y H:i:s');
?>
    </p>

<?php
$date2 = '20/06/2020 9:00';
$dateTime = DateTime::createFromFormat('d/m/Y H:i', $date2);
echo $dateTime->format('d/m/Y H:i') ;
?>

<p>

<?php
$debut = new DateTime('2020-06-20'); 
$fin = new DateTime();
$interval = $debut->diff($fin);
echo $interval->format('Il s\'est écoulé  %R%d jours et %R%H heure. ');
?>
</p>

</html>
