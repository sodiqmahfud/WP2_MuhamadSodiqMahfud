<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Welcome, <br>Selamat Belajar Web Programming</h1>";
    }

    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('Model_latihan1');
        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->Model_latihan1->jumlah($nil1, $nil2);

        $this->load->view('view-latihan1', $data);
    }
}