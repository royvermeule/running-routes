<?php
    class Running extends Controller
    {
        public function __construct()
        {
            $this->runModel = $this->model('Run');
        }

        public function index()
        {
            //hier geef je de method aan die je hebt gemaakt in de Run model.
            //deze method(getMap) haalt de record uit de database.
            $maps = $this->runModel->getMap();
            
            
            //hier halen we de gegevens uit de record.
            $rows = '';
            foreach ($maps as $value)
            
            {
                $rows .= "<tr>
                <td>" . htmlentities($value->map_name, ENT_QUOTES, 'ISO-8859-1') . "</td>               
                <td>" . htmlentities($value->map_length, ENT_QUOTES, 'ISO-8859-1') . "</td>
                <td>" . ($value->map_terrain) . "</td>
                <td>" . htmlentities($value->map_desc, ENT_QUOTES, 'ISO-8859-1') . "</td>
                <td><a href='" . URLROOT . "/maps/gmaps/$value->id'>map bekijken</a></td>
                </tr>";
            }
            //<td><a href='" . URLROOT . "/products/update->id'>update</a></td>
            //<td><a href='" . URLROOT . "/products/delete/$value->id'>delete</a></td>
            $data =  [
                'title' => 'Maps',
                'mapinfo' => $rows

            ];
            
            $this->view('maps/index', $data);
        }

        public function gmaps($id)
        {
            $row = $this->runModel->getSingleMap($id);
            
            $data = [
                'row' => $row,
            ];
            $this->view('maps/gmaps', $data);
        }


    }
?>