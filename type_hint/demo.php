<?php
// Bật strict mode
declare(strict_types=1);

// Nhúng các file chứa interface và class
require_once 'I.php';
require_once 'C.php';
require_once 'A.php';
require_once 'B.php';

class Demo
{

    public function typeCReturnI(): I
    {
        echo __FUNCTION__ . "<br>";
        return new class implements I {
            public function f()
            {
                echo "Implementing interface I.";
            }
        };
    }

    public function typeIReturnI(): I
    {
        echo __FUNCTION__ . "<br>";
        return new class implements I {
            public function f()
            {
                echo "Implementing interface I.";
            }
        };
    }

    public function typeIReturnNull(): ?I
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeNullReturnI(): I
    {
        echo __FUNCTION__ . "<br>";
        return new class implements I {
            public function f()
            {
                echo "Implementing interface I.";
            }
        };
    }

    public function typeAReturnI(): I
    {
        echo __FUNCTION__ . "<br>";
        return new class implements I {
            public function f()
            {
                echo "Implementing interface I.";
            }
        };
    }


    public function typeBReturnI(): I
    {
        echo __FUNCTION__ . "<br>";
        return new class implements I {
            public function f()
            {
                echo "Implementing interface I.";
            }
        };
    }

    public function typeAReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeAReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnNull(): ?A
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeBReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeBReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeBReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnNull(): ?B
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeCReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeCReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeCReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnNull(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeIReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeIReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeIReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeNullReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeNullReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeNullReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeNullReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

$demo = new Demo();

$results = $demo->typeAReturnA();
$results = $demo->typeAReturnB();
$results = $demo->typeAReturnC();
$results = $demo->typeAReturnI();
$results = is_null($demo->typeAReturnNull());

$results = $demo->typeBReturnA();
$results = $demo->typeBReturnB();
$results = $demo->typeBReturnC();
$results = $demo->typeBReturnI();
$results = is_null($demo->typeBReturnNull());

$results = $demo->typeCReturnA();
$results = $demo->typeCReturnB();
$results = $demo->typeCReturnC();
$results = $demo->typeCReturnI();
$results = is_null($demo->typeCReturnNull());

$results = $demo->typeIReturnA();
$results = $demo->typeIReturnB();
$results = $demo->typeIReturnC();
$results = $demo->typeIReturnI();
$results = is_null($demo->typeIReturnNull());

$results = $demo->typeNullReturnA();
$results = $demo->typeNullReturnB();
$results = $demo->typeNullReturnC();
$results = $demo->typeNullReturnI();
$results = is_null($demo->typeNullReturnNull());
?>