<?php
namespace Tutoriel\HTML;
class BootstrapForm extends Form{

/**
     * param $html Code html à entourer
     * return string
     */
    protected function surround($html)
    {
        return "<div class=\"form-group\">$html</div>";
    }

    /**
     * param $name string
     * return string
     */  
    public function input($name) //ici $name fait référence au nomdu champ
    {
        return $this->surround(
            '<label>' . $name . '</label><br><input type="text" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control"><br>'
        );
    }


    /**
     * return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}