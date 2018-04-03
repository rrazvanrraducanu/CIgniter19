<?php
class MainModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function save($title,$url)
    {
        $this->db->set('title',$title);
        $this->db->set('image',$url);
        $this->db->insert('images');
    }
   public function getImages()
{
  $this->db->select('title,image')->from('images');
  $query = $this->db->get();
  return $query->result();
   }
}
