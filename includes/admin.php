<?php 
class Admin
{
    private Sql $db;

    public function __construct()
    {
        $this->db = new Sql();
    }

    public function __call($name, $arguments)
    {
        echo "La methode $name n'est pas accessible";
        echo "Les arguments passés sont  ".implode('/',$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        
    }

    public function __get($name)
    {
        echo "La variable  $name n'existe pas";
    }

    public function __set($name, $value)
    {
        echo "Vous essayez de mettre la valeur $value a la variable  $name";
    }

    public function __toString()
    {
        return "Vous tentez d'afficher un objet";
    }

    public function __invoke($arguments)
    {
        echo "Vous tentez d'utiliser un objet comme fonction avec pour argumets $arguments";
    }

    public function __clone()
    {