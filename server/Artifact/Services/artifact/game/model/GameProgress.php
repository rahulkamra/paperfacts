<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GameProgress
 *
 * @author PCOne
 */
class GameProgress {
    //put your code here
    
    public $id;
    
    public $friend;
    public $csp;
    public $progressType;
    public $_explicitType = "artifact.game.model.GameProgress";

 

    public function getProgressType(){
        return $this->progressType;
    }

    public function setProgressType(ProgressType $progressType){
        $this->progressType=$progressType;
    }

    
}

?>
