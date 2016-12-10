<?php

/*
 * Pharo
 */

namespace App\Controls;

/**
 * Description of MenuControl
 *
 * @author hippo
 */
class MenuControl extends \Nette\Application\UI\Control {
    public function render() {
        $this->template->setFile(__DIR__ . '/templates/menu.latte');
        $this->template->render();
    }
}
