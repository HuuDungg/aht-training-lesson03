<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }

    public function getRoot1()
    {
        $delta = $this->getDiscriminant();
        if ($delta < 0) {
            return null;
        }
        return (-$this->b + sqrt($delta)) / (2 * $this->a);
    }

    public function getRoot2()
    {
        $delta = $this->getDiscriminant();
        if ($delta < 0) {
            return null;
        }
        return (-$this->b - sqrt($delta)) / (2 * $this->a);
    }
}


$equation = new QuadraticEquation(1, 32, 23);

$delta = $equation->getDiscriminant();

if ($delta > 0) {
    echo "Phương trình có hai nghiệm: ";
    echo "Nghiệm thứ nhất: " . $equation->getRoot1();
    echo "Nghiệm thứ hai: " . $equation->getRoot2();
} elseif ($delta == 0) {
    echo "Phương trình có nghiệm kép: " . $equation->getRoot1();
} else {
    echo "Phương trình vô nghiệm";
}
