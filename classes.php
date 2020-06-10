<?php
class User
{
    protected $name;
    protected $surname;
    public function __construct($name , $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }
    public function Hello(){
        $hello = [
            "ru" => "Здравствуйте",
            "uk" => "Доброго дня",
            "en" => "Hello",
        ];
        return $hello;
    }
}
class Client extends User
{
    public function Hello(){
        $hello = [
           "ru" => parent::Hello()['ru']. " Клиент " . $this->name . " " . $this->surname .",вы можете на сайте просматривать информацию доступную пользователям",
           "uk" => parent::Hello()['uk'] . " Клієнт " . $this->name . " " . $this->surname .",ви можете на сайті переглядати інформацію доступну користувачам" ,
           "en" => parent::Hello()['en'] . " Client " . $this->name . " " . $this->surname .",you can view the information available to users on the site",
        ];
        return $hello;
    }
 }
 class Manager extends User
{
    public function Hello(){
        $hello = [
           "ru" => parent::Hello()['ru']. " Менеджер " . $this->name . " " . $this->surname .",вы можете на сайте изменять,удалять и создавать клиентов",
           "uk" => parent::Hello()['uk'] . " Менеджер " . $this->name . " " . $this->surname .",ви можете на сайті змінювати, видаляти і створювати клієнтів" ,
            "en" => parent::Hello()['en'] . " Manager " . $this->name . " " . $this->surname .",you can change, delete and create clients on the site",
        ];
        return $hello;
    }
    public function SayHello()
    {
        echo "123";
    }
}
 class Admin extends User
 {
      public function Hello(){
         $hello = [
            "ru" => parent::Hello()['ru']. " Администратор " . $this->name . " " . $this->surname .",вы можете на сайте делать все",
            "uk" => parent::Hello()['uk'] . " Адмiнiстратор " . $this->name . " " . $this->surname .",ви можете на сайті робити все" ,
             "en" => parent::Hello()['en'] . " Admin " . $this->name . " " . $this->surname .",you can do everything on the site",
         ];
         return $hello;
     }
    
 }

