<?php
namespace SearchRobot;

public function SearchRobot() {
    $this->direction  = $direction;
    $this->robot = $robot;
    $this->position = $tentativePosition;

    if ($robot == true) {
      echo "Je l'es trouvé";
    }else {
      echo "Il est caché";
    }

    case 'N':
    $this->move($robot($id));
    break;

    case 'S':
    $this->move($robot:back($id));
    break;

    case 'W'
    $this->move($robot($id)->rotate('left'));
    break;

    case 'E'
    $this->move($robot($id)->rotate('right'));
    break;

  }





?>