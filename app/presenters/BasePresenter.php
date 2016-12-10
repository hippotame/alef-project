<?php

namespace App\Presenters;

use Nette;
use App\Model;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter {

    protected $db;

    public function __construct(Nette\Database\Context $database) {
        $this->db = $database;
    }
    
    
    protected function createComponentMenu() {
        return new \App\Controls\MenuControl();
    }

}
