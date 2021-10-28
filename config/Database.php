<?php 'config/config.php';?>
<?php

Class Database{

    public $hostName = HOST_NAME;
    public $user = USER;
    public $pass = PASS;
    public $dbName = DB_NAME;

    public $link;
    public $error;

    public function __construct(){
        $this->DataBaseConnect();
    }

    public function DataBaseConnect(){
        $this->link = new mysqli($this->hostName,$this->user,$this->pass,$this->dbName);
        if(! $this->link){
            $this->error = 'Database Connection fail....';
            return false;
        }else{
            
        }
    }

    public function selectdta($query){
        $result = $this->link->query($query) or die ($this->link->error);
        if($result-> num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    //insert query
	public function insert($insert){
		$insertqur = $this->link->query($insert) or die($this->link->error);
		return $insertqur;
	}

        //update query
	public function update($update){
		$update = $this->link->query($update) or die($this->link->error);
		return $update;
	}
            //update query
	public function delete($delete){
		$delete = $this->link->query($delete) or die($this->link->error);
		return $delete;
	}

}

?>