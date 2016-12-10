<?php

/*
 * Pharo
 */

namespace App\Presenters;

use Data\Notes;
/**
 * Description of AlfabetPresenter
 *
 * @author hippo
 */
class AlfabetPresenter extends BasePresenter {
    
    
    
    
    public function renderDefault(){
        $data = \Data\Alphabet::getAll();
        $this->template->data = $data;
    }
}
