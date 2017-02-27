<?php
/* Task-7 Наследование, инкапсуляция
 * - создать экземпляр класса B и вызвать каждый метод,
 * посмотреть что получилось, проверить себя. 
 * затем в дочернем классе переопределить все переменные родительского класса
 * и вызвать еще раз все методы.  
 * 
 * class A
{
 public $public;
 protected $protected;
 private $private;
 
 public publicGetPublic()
 {
  return $this->public;
 }
 protected protectedGetPublic()
 {
  return $this->public;
 }
 private privateGetPublic()
 {
  return $this->public;
 }

 public publicGetProtected()
 {
  return $this->protected;
 }
 protected protectedGetProtected()
 {
  return $this->protected;
 }
 private privateGetProtected()
 {
  return $this->protected;
 }

 public publicGetPrivate()
 {
  return $this->private;
 }
 protected protectedGetPrivate()
 {
  return $this->private;
 }
 private privateGetPrivate()
 {
  return $this->private;
 }

 public overrideMethod()
 {
  return 123 . '-' . $public;
 }
}
class B extends A
{
  public overrideMethod()
 {
  return 456 . '-' . $public;
 }
}
 */
class A {
    public $public;
    protected $protected;
    private $private;
    
    public function publicGetPublic() {
        return $this->public;
    }
    protected function protectedGetPublic() {
        return $this->public;
    }
    private function privateGetPublic() {
        return $this->public;
    }
    public function publicGetProtected() {
        return $this->protected;
    }
    protected function protectedGetProtected() {
        return $this->protected;
    }
    private function privateGetProtected() {
        return $this->protected;
    }
    public function publicGetPrivate() {
        return $this->private;
    }
    protected function protectedGetPrivate() {
        return $this->private;
    }
    private function privateGetPrivate() {
        return $this->private;
    }
    public function overrideMethod() {
        return 123 . '-' . $this->public;
    }
}
class B extends A {
    public $public = 30;
    public $private = 40;
    public $protected = 50;
    public function overrideMethod() {
        return 456 . '-' . $this->public;
    }
}

$sample1 = new B();
$sample1->public = 15;
$sample1->private = 400;
$sample1->protected = 3;

echo "<pre>";
print_r ($sample1);
echo "</hr>";

echo $sample1->publicGetPublic(); //Возвращает значение паблик, поэтому все ок!
echo "</br>";
//$sample1->protectedGetPublic();
//$sample1->privateGetPublic();
echo $sample1->publicGetProtected();
echo "</br>";
//$sample1->privateGetProtected();
echo $sample1->publicGetPrivate();
echo "</br>";
//$sample1->protectedGetPrivate(); 
//$sample1->privateGetPrivate();
echo $sample1->overrideMethod();
echo "</br>";
echo $sample1->overrideMethod();
echo "</hr>";


