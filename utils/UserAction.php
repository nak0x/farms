<?php

class UserAction{

  static function getAction(array $currentViewAction): UserAction{
    return new UserAction;
  }

  static function computeAction():bool{
    return true;
  }

}