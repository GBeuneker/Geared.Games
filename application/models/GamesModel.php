<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GamesModel extends CI_Model {

	function getAllGames() {
		$db = $this->db;

		$result = $db->query("SELECT * FROM Games ORDER BY release_date DESC");

		return $result->result();
	}

	function getGame($id)
	{
		$db = $this->db;

		$result = $db->query("SELECT * FROM Games WHERE id = ?", array($id));

		return $result->row();
	}
}