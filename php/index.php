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

        if ($this->isEmpty()) {
            $this->head = $nodo;
            $this->tail = $nodo;    
        } else {
            $nodo->setNext($this->head);
            $this->head = $nodo;
        }
    }

    public function pop() {
       $this->head = $this->head->getNext();
    }

    //? Debo se;alar directamente el valor del nodo,
    //? si señalo sólo el nodo arrojará un error

    public function print()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty <br>";
            return;
        }

        $current = $this->head;

        while ($current != null) {
            echo $current->value . "<br>";
            $current = $current->getNext();
        }


        
    }

    public function isEmpty()
    {
        return $this->head == null;
    }
}

$stack = new Stack();
$stack->push("First node of information");
$stack->push("Second node of information");
$stack->push("Third node of information");
$stack->push("Fourth node of information");
$stack->push("Fifth node of information");

$stack->print();
echo "<br>---------------------- <br>";
$stack->pop();
$stack->print();

// Estoy creando un stack con nodos, el stack tiene un head y un tail, el head es el primer nodo que se inserta y el tail es el último nodo que se inserta. El stack tiene un método push que inserta un nodo al principio del stack. El stack tiene un método print que imprime todos los nodos del stack. El stack tiene un método isEmpty que devuelve true si el stack está vacío y false si no lo está.

// Primero me va a imprimir 'creando nodo que es el momento en que se está creando nodo' y luego imprimo el valor de cada nodo


// $nodo = new Nodo("Hola");

// echo "<br>";
// echo "El nodo dice " . $nodo->value;
// echo "<br>";


// echo "<br>";

// // Así puedo ver qué clases hay
// echo get_class($nodo);