<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lead extends CI_Model {
  public function get() {
    return $this->db->query("SELECT * FROM leads LIMIT 0, 10")->result_array();
  }
  // public function no_filter($filter_data) {
  //   $offset = $filter_data['offset'];
  //   return $this->db->query("SELECT * FROM leads LIMIT $offset, 10")->result_array();
  // }
  public function basic_filter($filter_data) {
    $from_date = $filter_data['from'];
    $to_date = $filter_data['to'];
    $offset = $filter_data['offset'];
    return $this->db->query("SELECT * FROM leads WHERE registered_datetime BETWEEN '$from_date' AND '$to_date' LIMIT $offset, 10")->result_array();
  }
  public function name_filter($filter_data) {
    $from_date = $filter_data['from'];
    $to_date = $filter_data['to'];
    $offset = $filter_data['offset'];
    $name = $filter_data['name'];
    return $this->db->query("SELECT * FROM leads WHERE registered_datetime BETWEEN '$from_date' AND '$to_date'
    AND first_name LIKE '%$name%' OR last_name LIKE '%$name%'
    LIMIT $offset, 10")->result_array();
  }
}
?>
