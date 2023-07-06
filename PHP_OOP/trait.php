<!DOCTYPE html>
<html>
<body>

<?php
trait message1
{
    public function msg()
    {
        echo "I am learning trait<br>";
    }

    public function hello()
    {
        echo "Hello world!<br>";
    }
}

trait message2
{
    public function msg2()
    {
        echo "Arekta Trait!<br>";
    }
}

class Welcome
{
    use message1, message2;
}

class Test
{
    use message1;
    public function msg()
    {
        echo "Dekhi to ki hoy!<br>";
    }
}

$obj = new Welcome();
$obj->msg();
$obj->msg2();
$obj2 = new Test();
$obj2->msg();
$obj2->hello();

?>

</body>
</html>
