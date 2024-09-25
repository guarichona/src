<?php
// echo "Hello Nazh!";
$este = "este";

class Nodo
{
    public $value;
    private $next = null;


    public function __construct($value)
    {
        echo "Creando nodo <br>";
        $this->value = $value;
    }

    public function setNext($next)
    {
        $this->next = $next;
    }

    public function getNext()
    {
        return $this->next;
    }
}

class Stack
{
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function push($value)
    {
        $nodo = new Nodo($value);
        $this->head = $nodo;
    }

    //? Debo se;alar directamente el valor del nodo,
    //? si señalo sólo el nodo arrojará un error

    public function print()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty <br>";
            return;
        }

        echo $this->head->value . "<br>";
        echo $this->head->getNext() . "<br>";
    }

    public function isEmpty()
    {
        return $this->head == null;
    }
}

$stack = new Stack();
$stack->push("First node of information");
$stack->print();

// $nodo = new Nodo("Hola");

// echo "<br>";
// echo "El nodo dice " . $nodo->value;
// echo "<br>";


// echo "<br>";

// // Así puedo ver qué clases hay
// echo get_class($nodo);