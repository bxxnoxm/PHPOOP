<?php

class Personal {
    // property หรือ attribute
    private $nameperson;
    private $department;
    private $position;
    private $salary;
    private $age;
    private $tel;

    // method หรือการกระทำ
    public function setnameperson($nameperson, $department, $position, $salary,$age,$tel) {
      $this->nameperson = $nameperson;
      $this->department = $department;
      $this->position = $position;
      $this->salary = $salary;
      $this->age = $age;
      $this->tel = $tel;
    }
    public function getnameperson() {
      echo $this->nameperson;
      echo $this->department;
      echo $this->position;
      echo $this->salary;
      echo $this->age;
      echo $this->tel;
    }
  }
  
  // การสร้าง object 
  // สร้าง object สำหรับเก็บข้อมูลพนักงานคนที่ 1
  $emp1 = new Personal();
  $emp1->setnameperson("sutthipong","Business Computer","student",1000,17,0929279405);
  $emp1->getnameperson();
  
  $emp2->setnameperson("adipha","Business Computer","student",3000,17,0917523669);
  $emp2->getnameperson();

  $emp3->getnameperson("arisara","Business Computer","student",2500,17,0935105741);
  $emp3->getnameperson();

  $emp4->getnameperson("chiraporn","Business Computer","student",5000,17,0636034628);
  $emp4->getnameperson();

  $emp5->getnameperson("thippawan","Business Computer","student",9400,17,0808872790);
  $emp5->getnameperson();
  
  
?>