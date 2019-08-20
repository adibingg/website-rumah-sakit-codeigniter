<?php

defined('BASEPATH') OR exit("No dirrect script allowed!");


class Auth_admin extends CI_Model{
    public function getLogin(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $data = $this->db->get('admins');
        return $data;

        if($data->num_rows()>0){
            foreach($data->result() as $sess){
                $session_admins = array(
                    'id_admin' => $sess->id_admin,
                );

                $this->session->set_userdata($session_admins);
            }
        }else{
            $this->session->set_flashdata('info', 'Gagal login, periksa kembali username dan password anda!');
            redirect('admin/login');
        }
    }
}