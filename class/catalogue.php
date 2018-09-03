<?php

/**
 *
 */
class Catalogue
{

  private $_collection;

  function __construct()
  {

    $_collection = $this->loadCollection();

  }

  public function loadCollection()
  {
    $filecontent = file_get_contents(__DIR__ . "/../mook_data.json");

    //false to get std object
    $catalogue = json_decode($filecontent, false);

    $this->setCollection($catalogue);

  }

  public function getCollection()
  {

    return $this->_collection;

  }

  public function setCollection($collection)
  {

    $this->_collection = $collection;

  }

}
