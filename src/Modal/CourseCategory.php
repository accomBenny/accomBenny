<?php

namespace App\Modal;

use Ramsey\Uuid\Uuid;

class CourseCategory {
    private string $UUID = '';
    private string $type = '';
    private string $details = '';
    public function __construct($type,$details) 
    {   /*新增建構子
        UUID 唯一碼，不重複
        type 類型名稱
        details 類型細節
        */
        $this->UUID=Uuid::uuid4()->toString();
        $this->type=$type;
        $this->details=$details;
    }
    public function getUUid():string{
        return $this->UUID;
    }
    public function getType():string{
        return $this->type;
    }
    public function getDetails():string{
        return $this->details;
    }
}
