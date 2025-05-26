<?php 

namespace sistema\Nucleo;

class Controller
{

    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;

        echo "Seu nome é {$this->name}, e voce tem {$this->age} anos de idade";
    }
}

?>