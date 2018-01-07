<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Transaksi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get transaksi by 
     */
    function get_transaksi($)
    {
        return $this->db->get_where('transaksi',array(''=>$))->row_array();
    }
        
    /*
     * Get all transaksi
     */
    function get_all_transaksi()
    {
        $this->db->order_by('', 'desc');
        return $this->db->get('transaksi')->result_array();
    }
        
    /*
     * function to add new transaksi
     */
    function add_transaksi($params)
    {
        $this->db->insert('transaksi',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update transaksi
     */
    function update_transaksi($,$params)
    {
        $this->db->where('',$);
        return $this->db->update('transaksi',$params);
    }
    
    /*
     * function to delete transaksi
     */
    function delete_transaksi($)
    {
        return $this->db->delete('transaksi',array(''=>$));
    }
}