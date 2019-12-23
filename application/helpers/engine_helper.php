<?php 

function template(){
    $ci = & get_instance();
    $query = $ci->db->query("SELECT folder FROM templates where aktif='Y'");
    $tmp = $query->row_array();
    if ($query->num_rows()>=1){
        return $tmp['folder'];
    }else{
        return 'errors';
    }
}