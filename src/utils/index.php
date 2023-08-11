<?php

function filterNullValue(array $needHandle) {
  $arrFiltered = array_filter($needHandle, function($item){
    if($item) {
      return true;
    }
  });
  return $arrFiltered;
}

function convertToArray($person, array $ignore = []) {
  $personTypeArray = (array) $person;
  foreach($ignore as $item){
    if(!isset($personTypeArray[$item])){
      unset($personTypeArray[$item]);
    }
  }
  return $personTypeArray;
}