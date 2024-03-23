<?php

namespace App\Modal;

use Ramsey\Uuid\Uuid;
class Course {
    private string $UUID = '';
    private string $name = 'Unknown';
    private string $price='Unknown';
    private string $type = '';
    public function __construct($name,$price) 
    { /*新增建構子
        UUID 唯一碼，不重複
        name 課桯名稱
        price 課桯售價
        CourseCategory 所屬 課程類型
        */
        $this->UUID = Uuid::uuid4()->toString();
        $this->name=$name;
        $this->price=$price;
        $this->$type=
    }
    public function getUUID():string{
        return $this->UUID;
    }   
    public function getName():string{
        return $this->name;
    }
    public function getPrice():string{
        return $this->price;
    }

    
}
