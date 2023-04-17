<?php
class ItemCRUDModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('title', $this->input->get("search"));
            $this->db->or_like('description', $this->input->get("search"));
        }
        $query = $this->db->get("items");
        return $query->result();
    }

    public function insert_item()
    {
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'bus_berangkat'=> $this->input->post('bus_berangkat'),
            'pnp_berangkat'=> $this->input->post('pnp_berangkat'),
            'bus_datang'=> $this->input->post('bus_datang'),
            'pnp_datang'=> $this->input->post('pnp_datang'),
            'laik'=> $this->input->post('laik'),
            'catatan'=> $this->input->post('catatan'),
            'tidak_laik'=> $this->input->post('tidak_laik'),
            'jumlah_rampcheck'=> $this->input->post('jumlah_rampcheck'),
            'positive'=> $this->input->post('positive'),
            'l_catatan'=> $this->input->post('l_catatan'),
            'negative'=> $this->input->post('negative'),
            'self_jumlah'=> $this->input->post('self_jumlah')
        );
        return $this->db->insert('items', $data);
    }

    public function update_item($id)
    {
        $data=array(
            'tanggal' => $this->input->post('tanggal'),
            'bus_berangkat'=> $this->input->post('bus_berangkat'),
            'pnp_berangkat'=> $this->input->post('pnp_berangkat'),
            'bus_datang'=> $this->input->post('bus_datang'),
            'pnp_datang'=> $this->input->post('pnp_datang'),
            'laik'=> $this->input->post('laik'),
            'catatan'=> $this->input->post('catatan'),
            'tidak_laik'=> $this->input->post('tidak_laik'),
            'jumlah_rampcheck'=> $this->input->post('jumlah_rampcheck'),
            'positive'=> $this->input->post('positive'),
            'l_catatan'=> $this->input->post('l_catatan'),
            'negative'=> $this->input->post('negative'),
            'self_jumlah'=> $this->input->post('self_jumlah')
        );
        if($id==0){
            return $this->db->insert('items',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('items',$data);
        }
    }

    public function find_item($id)
    {
        return $this->db->get_where('items', array('id' => $id))->row();
    }

    public function delete_item($id)
    {
        return $this->db->delete('items', array('id' => $id));
    }
}
