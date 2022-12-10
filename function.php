<?php

function generaPassword(){

$caratteri = "abcdefghijklmnopqrstuvwxyz
              ABCDEFGHIJKLMNOPQRSTUVWXYZ
              0123456789
              !<>£$%&/()=?[]{}-_+*";

$comb = str_shuffle($caratteri);
$pwd = substr($comb,0,8);
echo $pwd;

}
