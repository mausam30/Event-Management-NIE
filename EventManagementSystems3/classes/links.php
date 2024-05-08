<?php
class Link {
    private $EventID;
    private $link;
    
    public function __construct($id, $link) {
        $this->EventID = $id;
        $this->link = $link;
    }
    
    public function getId() { return $this->id; }
    public function getLink() { return $this->link; }
    
}
?>