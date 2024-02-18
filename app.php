<?php

require "./utils/Player.php";
require "./utils/UserAction.php";
require "./utils/View.php";
require "./utils/Renderer.php";
require "./utils/Engine.php";

require "./entity/Farm.php";

const PLAYER = new Player;
const GAME = new Engine(PLAYER);

Renderer::renderIntro();

GAME->start();

Renderer::renderOutro();
