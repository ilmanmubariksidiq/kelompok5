<?php

class isiController extends ControllerBase
{

    public function indexAction()
    {
        echo $this->tag->linkTo("tabel", "tabel");
        echo $this->tag->linkTo("date", "date");
        echo $this->tag->linkTo("form", "form");

    }

}

