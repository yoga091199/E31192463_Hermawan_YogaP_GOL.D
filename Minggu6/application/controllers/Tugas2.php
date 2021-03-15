<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas2 extends CI_Controller
{
  public function index()
  {
    $this->load->model('Models_1');
    $models = $this->Models_1;
    $a = $models->txtTugas2;
    $b = $models->txtTugas3;
    $data['txtTugas2'] = $a;
    $data['txtTugas3'] = $b;
    $this->load->view('tugas2', $data);
  }
}
