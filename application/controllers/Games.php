<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	// Default page where all the game cards are shown.
	public function index()
	{
		$data['title'] = "Geared Games";
		$this->load->view('header', $data);

		$this->load->view('sidebar');
		$this->load->view('games_content');
	}

	// Load a page for a specific game.
	public function Game($id)
	{
		$data['title'] = "Geared Games";
		$this->load->view('header', $data);

		$this->load->model('gamesModel');
		$data['gameInfo'] = $this->gamesModel->getGame($id);

		$this->load->view('sidebar');
		$this->load->view('game_content', $data);

		$this->load->view('footer');
	}

	// Load all the game cards.
	public function getGamecards()
	{
		$tags = null;
		if(isset($_POST['tags']))
			$tags = $_POST['tags'];
		
		$this->load->model('gamesModel');
		$result = $this->gamesModel->getGamecards($tags);

		echo json_encode($result);
	}

}		