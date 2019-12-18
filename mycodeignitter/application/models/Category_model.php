<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Category_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    //    $this->load->library('ion_auth');
    //    if (!$this->ion_auth->logged_in())
    //    {redirect('auth/login');}


    }

    /*
     * Get category by id
     */
     function get_cat_hash($id)
     {
         $this->db->where('hcode', $id);
         return $this->db->get('category')->row_array();
     }

    function get_category($id,$user_id)
    {
        $this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
        return $this->db->get('category')->row_array();
    }

    /*
     * Get all category
     */
    function get_all_category()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('category')->result_array();
    }

//категория 1 пользователя
    function get_all_category_one_user($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->order_by('id', 'desc');
        return $this->db->get('category')->result_array();
    }
//категория 1 пользователя


    /*
     * function to add new category
     */
    function add_category($params)
    {
        $this->db->insert('category',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update category
     */
    function update_category($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('category',$params);
    }

    /*
     * function to delete category
     */
    function delete_category($id)
    {
        return $this->db->delete('category',array('id'=>$id));
    }
}
