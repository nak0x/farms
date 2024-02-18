<?php

class Engine{

  private bool $isRunning = false;
  private Renderer $renderer;
  
  private Player $player;
  private array $entitys = [
    "farms" => [],
    "crops" => [],
    "barns" => []
  ];

  public function __construct(Player $player)
  {
    $this->player = $player;
    $this->renderer = new Renderer;
  }

  public function start(){

    $this->isRunning = true;

    $this->gameLoop();

  }

  private function gameLoop(){

    while($this->isRunning){
      $this->renderer->render($this->entitys);
  
      $userAction = $this->input();
  
      $this->compute($userAction);
    }

  }

  /**
   * Ask $this->player for an UserAction and return it
   * @return UserAction
   */
  private function input(): UserAction{
    return UserAction::getAction($this->renderer->getCurrentViewAction());
  }

  private function compute(UserAction $action){
    $this->isRunning = UserAction::computeAction($action, Renderer::getCurrentView(), $this->entitys, $this->player);
  }

};