<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	// Default page where all the game cards are shown.
	public function index()
	{
		$data['title'] = "Geared Games";
		$this->load->view('header', $data);
		$this->load->view('sidebar');

		$this->load->model('gamesModel');
		$data['gameInfo'] = $this->gamesModel->getAllGames();
		$this->load->view('games_content', $data);
	}

	// Load a page for a specific game.
	public function Game($id)
	{
		$this->load->model('gamesModel');
		$data['gameInfo'] = $this->gamesModel->getGame($id);

		$gameTitle = (array)($data['gameInfo']);
		$data['title'] = $gameTitle['title'];
		
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('game_content', $data);

		$this->load->view('footer');
	}

	// Load all the game cards.
	public function getGamecards()
	{	
		$this->load->model('gamesModel');
		$result = $this->gamesModel->getAllGames();

		echo json_encode($result);
	}

}		
