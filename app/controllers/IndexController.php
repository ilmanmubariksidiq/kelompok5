<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
         echo $this->tag->linkTo("tabel", "tabel");

    }

}

