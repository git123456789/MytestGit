namespace Core;

class Page{
  public $id=null;
  
  public function getId($id=1){
    return $this->isNum($id);
  }
  
  public function isNum($id){
    return is_numeric($id);
  }
}
