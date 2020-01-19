<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Users_model extends CI_Model{

    function addUsers($post){
        $this->db->insert('admins', $post);
    }

    function getAllUsers(){
        $query = $this->db->get('admins');
        return $query;
    }

    function getUserId($id){
        $this->db->where('user_id', $id);
        $query = $this->db->get('admins');
        return $query;
    }

    function deleteUser($id){
        $this->db->where('users_id', $id);
        $this->db->delete('admins');
    }

    function checkPassword(){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admins');
        return $query;
    }

    function saveNewPassword(){
        
    }

}