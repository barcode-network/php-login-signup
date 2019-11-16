<?php
require 'IndexModel.php';
require 'IndexView.php';

class Index extends Page
{
    public function makeModel() : Model
    {
        return new IndexModel(DB_USER, DB_PASS, DB_NAME, DB_HOST);
    }

    public function makeView() : AbstractView
    {
        return new IndexView();
    }
}