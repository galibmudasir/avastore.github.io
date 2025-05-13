<?php

$baseurl = "http://localhost:8000/";

// component includes
include("component/header.php");
include("component/card-game.php");

// backend incude
include("backend/connection.php");

// section includes
include("section/home/slider-section-home.php");
include("section/home/game-section-populer.php");
include("section/home/game-section-new.php");

// page includes
include("pages/home.php");
include("pages/about.php");
include("pages/404.php");
include("pages/gamepage.php");