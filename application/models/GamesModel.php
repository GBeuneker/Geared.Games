<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GamesModel extends CI_Model {

	function getGamecards($tags) {
		$db = $this->db;

		$query = "SELECT * FROM Games";

		if($tags)
		{
			for($i = 0; $i < count($tags); $i++)
			{
				if($i == 0)
					$query .= " WHERE tags ";

				$query .= "LIKE '%" . $tags[$i] . "%'";		
				$query .= " OR tags ";
	 		}
		}

		$query .= " ORDER BY release_date DESC";

		$result = $db->query($query);

		return $result->result();
	}

	function getGame($id)
	{
		$db = $this->db;

		$result = $db->query("SELECT * FROM Games WHERE id = ?", array($id));

		return $result->row();
	}
}