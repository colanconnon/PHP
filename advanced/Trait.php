<?php 

trait ProcessFileTrait {
    public function ProcessFile($fileName) {
        parent::ProcessFile();
        print("Trait is Processing file". $fileName . "\n");
    }
}

?>