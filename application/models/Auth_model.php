<?php

defined('BASEPATH') OR exit("No dirrect script allowed!");


class Auth_model extends CI_Model
{

    public function getLogin()
    {
        
        $user = $this->input->post('username');
        $pass = md5($this->input->post('password'));

        $this->db->where('username', $user);
        $this->db->where('password', $pass);

        $data = $this->db->get('admins');

        if($data->num_rows()>0){
            foreach($data->result() as $session)
            {
                $session_administrator = array(
                    'id_admin' => $session->id_admin,
                    'admin_name' => $session->admin_name,
                );

                $this->session->set_userdata($session_administrator);
                redirect('admin/dashboard');
            }
        }
        else
        {
            $this->session->set_flashdata('info', 'Username atau Password salah!');
            redirect('admin/login');
        }
    }

    
}