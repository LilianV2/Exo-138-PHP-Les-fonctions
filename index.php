<?php

// Premiere ligne

function maFonction(){
    echo "Hello World!" . "<br>";
}

//Deuxieme ligne

maFonction();

//Troisieme ligne

function maFonctionParam($fname, $lname) {
    echo $fname . "<br>";
    echo $lname;
}

maFonctionParam("john","doe");




