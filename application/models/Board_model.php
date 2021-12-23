<?php

/**
 * 
 */
class Board_model extends CI_Model
{
	public $no;
	public $subject;
	public $content;
	public $writer;
	public $reg_date;

	function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$query = $this->db->get('board',10);
		return $query->result();
	}

	public function getCount()
	{
		$ac = $this->db->count_all('board');
		$pageSize = $ac%10 == 0 ? $ac/10 : ($ac/10)+1;
		return $pageSize;
	}


}