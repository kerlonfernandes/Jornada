<?php

    if(!isset($user->group)) {
        include 'sem-grupo.php';
    }
    if(isset($user->group)) {
        include 'areas.php';
    }