<?php
//var_dump($_POST);


foreach ($_POST as $value) {
    echo $value . "<br>";
}

$kleuren = $_POST['kleur'];
echo "<body style='background-color:$kleuren'</body>"

?>