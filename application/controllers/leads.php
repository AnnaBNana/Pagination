<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leads extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Lead");
	}

	public function index()
	{
		$this->load->view('/leads');
	}
	public function table()
	{
		$data['leads'] = $this->Lead->get();
		// var_dump($data);
		// die();
		$this->load->view('/partials/leads_table', $data);
	}
	public function filter() {
		//set post data to var filter date
		$filter_data = $this->input->post();
		//set page filter.  offset is how many rows to exclude from beginning of results array.  this allows progressive offest according to pagination
		if ($filter_data['page'] < 2) {
			$filter_data['offset'] = 0;
		} else {
			$filter_data['offset'] = ($filter_data['page'] * 10) - 10;
		}
		//checks if from is an empty string.  if it is, set to arbitrary date before any entries were made in table. this allows us to run queries using date no matter whether we have chosen one or not
		if($filter_data['from'] != "") {
			$filter_data['from'] = date('Y-m-d g:i:s', strtotime($_POST['from']));
		} else {
			$filter_data['from'] = date('Y-m-d g:i:s', strtotime('1/1/1970 00:00:00'));
		}
		//checks if to is an empty string, performing a similar task as the logic for from.  default to date is current datetime
		if($filter_data['to'] != "") {
			$filter_data['to'] = date('Y-m-d g:i:s', strtotime($_POST['to']));
		} else {
			$filter_data['to'] = date('Y-m-d g:i:s', strtotime('now'));
		}
		//if the name filter is empty we can not run the name query.  we can run date filter query due to setting of default dates, so we will run this query only if name is a blank string.  otherwise, run name filter query
		if($filter_data['name'] == "") {
			$data['leads'] =  $this->Lead->basic_filter($filter_data);
		}

		//if name is set run name query, since we cannot set a default name, we must construct a separate query to filter by name.  an alternative could using regex for every letter as default name, this would allow us to construct a single query for everything
		if($filter_data['name'] != "" ) {
			$data['leads'] = $this->Lead->name_filter($filter_data);
		}
		// var_dump($data['date_filtered']);
		// die();
		$this->load->view('/partials/leads_table', $data);
	}
}
