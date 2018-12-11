<?php
class migrate extends CI_Controller
{
	public function index()
	{
		// load migration library
		$this->load->library('migration');

		if ($this->migration->current() === FALSE)
		{
			echo 'Error' . $this->migration->error_string();
		} else {
			echo 'Migration run succesfully!';
		}
	}
}
?>