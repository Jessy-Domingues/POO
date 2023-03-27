<?php
/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form
{
    /**
     * var array Donées utilisées par le formulaire
     */
    private $data;

    /**
     * var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';


    /**
     * param array $date Donées utilisées par le formulaire
     */
    public function __construct($data = array())
    { //paramètre optionnel ($variable = ce qu'on veut par défaut)
        $this->data = $data;
    }

    /**
     * param $html Code html à entourer
     * return string
     */
    private function surround($html)
    {
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    /**
     * param $index string Index de la valeur à récupérer
     * return string
     */
    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null; //Si ça existe dans ce cas retrouner ce qu'il y a après ?, sinon renvoyer ce qu'il y a apres les :
    }


    /**
     * param $name string
     * return string
     */
    public function input($name) //ici $name fait référence au nomdu champ
    {
        return $this->surround(
            '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">'
        );
    }


    /**
     * return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}
