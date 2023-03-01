<?php
  switch ($_POST["radcourse"])
  {
    case "HNC" : echo "You have selected an HNC course";
    case "HND" : echo "You have selected an HND course";
    case "BSC" : echo "You have selected a BSC course";
    case "BSC Part Time" : echo "You have selected a BSC Part Time course";
    default    : echo "No course selected";
  }
?>       