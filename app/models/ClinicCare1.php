<?php

class ClinicCare1 extends Report{
        public function __construct(){
                parent::__construct("clinicCare_1");
        }
        public function getFromDatabase($id){
                $data = $this->find(['conditions' => "idcardnum = ?", 'bind' => [$id],'order' => 'type ASC']);
                if(!$data){
                        $this->insert(["idcardnum" => $id, "type" => '0']);
                        $this->insert(["idcardnum" => $id, "type" => '1']);
                        $this->insert(["idcardnum" => $id, "type" => '2']);
                        $this->insert(["idcardnum" => $id, "type" => '3']);
                        $this->insert(["idcardnum" => $id, "type" => '4']);
                        $this->insert(["idcardnum" => $id, "type" => '5']);
                        $this->insert(["idcardnum" => $id, "type" => '6']);
                        $this->insert(["idcardnum" => $id, "type" => '7']);
                        $this->insert(["idcardnum" => $id, "type" => '8']);
                        $this->insert(["idcardnum" => $id, "type" => '9']);
                        $data = $this->find(['conditions' => "idcardnum = ?", 'bind' => [$id],'order' => 'type ASC']);
                }
                return $data;
        }

        public function updateMultipleRows($params,$types,$conditions){
                
                foreach($types as $type){
                        $$type = ["type"=>"$type"];
                }
                foreach($params as $param => $value){
                        $dataType = explode('_',$param)[0];
                        $dataKey = explode('_',$param)[1];

                        foreach($types as $type){
                                if($dataType == $type){
                                        $$type[$dataKey] = $value; 
                                }
                        }
                }                
                foreach($types as $type){
                        $this->update1($$type,array_merge($conditions,["type"=>$type]));
                }
        }

}
