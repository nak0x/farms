<?php

class Renderer{
  
  static function renderIntro(){

  }

  static function renderOutro(){

  }

  public function render(array &$entitys){
    $entitys["farms"][] = new Farm;
  }

  public function getCurrentViewAction(): array{
    return [];
  }

  static function getCurrentView(): View{
    return new View;
  }

}