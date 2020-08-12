<?php

class WeightChart extends Report
{
        public function __construct()
        {
                parent::__construct("weight_chart");
        }

        public function getFromDatabase($id){
                $data = $this->find(['conditions' => "idcardnum = ?", 'bind' => [$id]]);
                if(!$data){
                        $this->insert(["idcardnum" => $id, "type" => 'week']);
                        $this->insert(["idcardnum" => $id, "type" => 'weight']);
                        $this->insert(["idcardnum" => $id, "type" => 'height']);
                        $data = $this->find(['conditions' => "idcardnum = ?", 'bind' => [$id]]);
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
