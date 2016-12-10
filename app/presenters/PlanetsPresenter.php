<?php

/*
 * Pharo
 */

namespace App\Presenters;

/**
 * Description of PlanetsPresenter
 *
 * @author hippo
 */

use Tomaj\Form\Renderer\BootstrapRenderer;
use Nette\Application\UI\Form;

class PlanetsPresenter extends BasePresenter {

    //put your code here

    protected $data;
    protected $planet;

    public function actionDefault() {
        $this->data = \Data\Planets::getData('all');
    }

    public function renderDefault() {
        $this->template->data = $this->data;
    }

    public function renderPlanet($planet) {
        $planetData = \Data\Planets::getData($planet);
        $this->makeCounts($planetData);
        $this->transData($planetData);
        $this->template->name = $planet;
        $alphabetData = \Data\Alphabet::getAll();
        $this->template->alfabet = $alphabetData;
        //dump($this->template->data);
    }

    protected function transData($data) {
        $out = [];
        forEach ($data as $key => $row) {
            $inRow = [];
            forEach ($row as $k => $td) {
                $inRow[$k] = [
                    'value' => $td,
                    'a_id' => sprintf('A_%s_%s', $key, $td),
                    'a_note' => \Data\Notes::getData($td),
                    'id' => sprintf('td_%s_%s', $key, $td)];
            }
            $out[$key] = $inRow;
        }
        $this->template->data = $out;
    }

    protected function makeCounts($data) {
        $all = [];
        $dataCols = 0;
        $fields = [];
        $sizeOfRows = sizeOf($data[0]);
        forEach ($data as $key => $rows) {
            $rowCount = 0;
            forEach ($rows as $k => $col) {
                $dataCols = $dataCols + $col;
                $rowCount = $rowCount + $col;
                $fields[$key][$k] = $col;
            }
            $all['rows-count'][] = $rowCount;
        }
        $cols = [];
        for ($i = 0; $i < $sizeOfRows; $i++) {
            for ($c = 0; $c < $sizeOfRows; $c++) {
                $cols[$i][] = $fields[$c][$i];
            }
        }
        $cols_count = [];
        forEach ($cols as $key => $row) {
            $fce = function() use ($row) {
                $c = 0;
                forEach ($row as $k => $v) {
                    $c = $c + $v;
                }
                return $c;
            };
            $cols_count[$key] = $fce();
        }
        $all['cols-count'] = $cols_count;
        $all['all-rows-count'] = $dataCols;
        $all['fields'] = $fields;
        $this->template->all_count = $dataCols;
        $this->template->rows_count = $all['rows-count'];
        $this->template->cols_count = $cols_count;
    }
    
    public function actionSaveTrack() {
        $data = [];
        $data['planet'] = $_POST['data_planet'];
        $data['track_name'] = $_POST['data_name'];
        $data['track_notes'] = $_POST['data_notes'];
        $data['track_numbers'] = $_POST['data_numbers'];
        $data['date_created'] = new \Nette\Database\SqlLiteral('NOW()');
        $this->db->table('tracks_planets')->insert($data);
        echo 'OK';
        die();
    }
    
    protected function createComponentAddWord() {
        $form = new Form();
        $form->addText('parse_name','Name of ...');
        $form->addSubmit('save');
        $form->setRenderer(new BootstrapRenderer);
        return $form;
    }

}
