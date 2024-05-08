<?php
require_once 'Location.php';

class LinkTableGateway {

    private $connect;
    
    public function __construct($c) {
        $this->connect = $c;
    }
    
    // execute a query to get all locations
    public function getLinks() {
        $sqlQuery = "SELECT * FROM links";
        
        $statement = $this->connect->prepare($sqlQuery);
        $status = $statement->execute();
        
        if (!$status) {
            die("Could not retrieve link details");
        }
        
        return $statement;
    }
    
    // execute a query to get a location with the specified id
    public function getLinksById($id) {
        $sqlQuery = "SELECT * FROM links WHERE EventID = :id";
        
        $statement = $this->connect->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not retrieve event ID");
        }
        
        return $statement;
    }
    
    //execute a insert sql statement that inserts data taken from user to a database.
    public function insert($p) {
        $sql = "INSERT INTO links(id,link) " .
                "VALUES (:id, :link)";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "id"              => $p->getID(),
            "link"           => $p->getLink(),            
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        
        if (!$status) {
            die("Could not insert link");
        }
        
        $id = $this->connect->lastInsertId();
        
        return $id;
    }
    
    public function update($p) {
        
        $sql = "UPDATE links SET " .
                "EventID = :id, " . 
                "link = :link, " .                
                
                " WHERE EventID = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "EventID"              => $p->getID(),
            "link"           => $p->getLink(),            
           
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        print_r($statement);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not update link details");
        }
    }
    
    public function delete($id) {
        $sql = "DELETE FROM links WHERE EventID = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "id" => $id
        );
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not delete link");
        }
    }    

}