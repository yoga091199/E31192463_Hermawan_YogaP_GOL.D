<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas1 extends CI_Controller
{
  public function index()
  {
    $this->load->model('Models_1');
    $models = $this->Models_1;
    $a = $models->txt;
    $data['text'] = $a;
    $this->load->view('tugas1', $data);
  }
}
