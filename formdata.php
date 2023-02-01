<?php

$result = mail("vilkovchanin@gmail.com", "Site info", "Info: name $_POST[name]\n Password $_POST[password]\n Save time $_POST[time]\n Sleep $_POST[sleep] hours\n Own tools $_POST[text]\n");
if ($result){
    echo "<p>Send is success</p>";
}
else {
    echo "<p>Send is not success</p>";
}


?>