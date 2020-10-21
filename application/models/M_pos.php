<?php
class M_pos extends CI_Model{
 
    function get_data_barang_bykode($nik){
        $hsl=$this->db->query("SELECT * FROM datawarga WHERE nik='$nik'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'pendidikan' => $data->pendidikan,
                    'jenispekerjaan' => $data->jenispekerjaan,
                    );
            }
        }
        return $hasil;
    }
}
 