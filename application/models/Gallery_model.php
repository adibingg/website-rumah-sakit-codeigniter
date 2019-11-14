<?php

defined('BASEPATH') OR exit("No dirrect script access allowe");

class Gallery_model extends CI_Model{

    function getAlbum(){
        $query = $this->db->get('album');
        return $query;
    }

    function SaveAlbum($data){
        $query = $this->db->insert('album', $data);
        return $query;
    }

    function getAlbmumId($id){
        $this->db->where('album_id',$id);
        $query = $this->db->get('album');
        return $query;
    }

    function updateAlbum($id,$data){
        $this->db->where('album_id',$id);
        $query = $this->db->update('album', $data);
        return $query;
    }

    function checkAlbum($id){
        $this->db->where('album_id', $id);
        $query = $this->db->get('gallery');
        return $query;
    }

    function deleteAlbum($id){
        $this->db->where('album_id',$id)->delete('album');
    }

    function getPhoto(){
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('album','gallery.album_id=album.album_id');
        $query = $this->db->get();
        return $query;
    }

    function getGalleryId($id){
        $this->db->where('gallery_id',$id);
        $this->db->join('album','album.album_id=gallery.album_id');
        $query = $this->db->get('gallery');
        return $query;
    }

    function getPhotoId($id){
        $this->db->where('gallery_id',$id);
        $this->db->delete('gallery');
    }

    function getPhotoAlbumById($id){
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('album','gallery.album_id=album.album_id');
        $this->db->where('album_id', $id);
        $query = $this->db->get();
        return $query;
    }


}