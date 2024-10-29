<?php 

class Company{
    protected $company;
    protected $address;
    protected $tel;

    protected function __construct($company, $address, $tel) {
        $this->company = $company;
        $this->address = $address;
        $this->tel = $tel;
    }
    
    protected function displayCompany(){
        echo "会社名：".$this->company.PHP_EOL;
        echo "住所：".$this->address.PHP_EOL;
        echo "電話番号：".$this->tel.PHP_EOL;
    }
}

class Department extends Company{
    private $department;
    private $manager;

    public function __construct($company, $address, $tel, $department, $manager) {
        parent::__construct($company, $address, $tel);
        $this->department = $department;
        $this->manager = $manager;
    }

    public function displayDepartment(){
        $this->displayCompany();
        echo "部署名：".$this->department.PHP_EOL;
        echo "部長：".$this->manager.PHP_EOL.PHP_EOL;
    }
}

$sampleA = new Department("サンプルA","市ヶ谷","080-XXXX-XXXX","人事","高田");
$sampleB = new Department("サンプルB","池袋","090-XXXX-XXXX","総務","田中");
$sampleC = new Department("サンプルC","新宿","070-XXXX-XXXX","営業","高橋");


$instances = array($sampleA,$sampleB,$sampleC);

foreach($instances as $instance){
    $instance->displayDepartment();
}

?>