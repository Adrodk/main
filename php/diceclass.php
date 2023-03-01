<?php

class Dice {
    private $face_value; // A number from 1 to 6

    // Roll the die:
    function roll() {
        $this->face_value = rand( 1, 6 ); // set face value to a random number from 1 to 6
    }

    // Return the face value (i.e. the number facing up):
    function get_face_value() {
        return $this->face_value; // Return the current face value
    }
}