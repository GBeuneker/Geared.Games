<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VideosModel extends CI_Model {

	function getAllVideos() {
		$db = $this->db;

		$result = $db->query("SELECT * FROM Videos ORDER BY release_date DESC");

		return $result->result();
	}

	function getVideo($id)
	{
		$db = $this->db;

		$result = $db->query("SELECT * FROM Videos WHERE id = ?", array($id));

		return $result->row();
	}
}