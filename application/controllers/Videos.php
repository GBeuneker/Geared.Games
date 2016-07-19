<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

	public function index()
	{
		$data['title'] = "Videos";
		$this->load->view('header', $data);
		$this->load->view('sidebar');

		$this->load->model('videosModel');
		$data['videoInfo'] = $this->videosModel->getAllVideos();
		$this->load->view('videos_content', $data);
	}

	// Load a page for a specific game.
	public function Video($id)
	{
		$this->load->model('videosModel');
		$data['videoInfo'] = $this->videosModel->getVideo($id);

		$gameTitle = (array)($data['videoInfo']);
		$data['title'] = $gameTitle['title'];

		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('video_content', $data);

		$this->load->view('footer');
	}

	// Load all the game cards.
	public function getVideocards()
	{
		$this->load->model('videosModel');
		$result = $this->videosModel->getAllVideos();

		echo json_encode($result);
	}
}
