<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemCRUD extends CI_Controller
{
    public $itemCRUD;

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('ItemCRUDModel');

        $this->itemCRUD = new ItemCRUDModel;
    }

    /**
     * Display Data this method.
     *
     * @return Response
     */
    public function index()
    {
        $data['data'] = $this->itemCRUD->get_itemCRUD();

        $this->load->view('default/header');
        $this->load->view('itemCRUD/list', $data);
        $this->load->view('default/footer');
    }

    /**
     * Show Details this method.
     *
     * @return Response
     */
    public function show()
    {
     

        $data['data'] = $this->itemCRUD->get_itemCRUD();

        $this->load->view('default/header');
        $this->load->view('itemCRUD/show', $data);
        $this->load->view('default/footer');
    }

   

    public function create()
    {
        $this->load->view('default/header');
        $this->load->view('itemCRUD/create');
        $this->load->view('default/footer');
    }

    /**
     * Store Data from this method.
     *
     * @return Response
     */

    public function store()
    {
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('bus_berangkat', 'Bus Berangkat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('itemCRUD/create'));
        } else {
            $this->itemCRUD->insert_item();
            redirect(base_url('itemCRUD'));
        }
    }

    /**
     * Edit Data from this method.
     *
     * @return Response
     */

    public function edit($id)
    {
        $item = $this->itemCRUD->find_item($id);

        $this->load->view('default/header');
        $this->load->view('itemCRUD/edit', array('item' => $item));
        $this->load->view('default/footer');
    }

    /**
     * Update Data from this method.
     *
     * @return Response
     */

    public function update($id)
    {
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('bus_berangkat', 'bus_berangkat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('itemCRUD/edit/' . $id));
        } else {
            $this->itemCRUD->update_item($id);
            redirect(base_url('itemCRUD'));
        }
    }

    /**
     * Delete Data from this method.
     *
     * @return Response
     */

    public function delete($id)
    {
        $item = $this->itemCRUD->delete_item($id);
        redirect(base_url('itemCRUD'));
    }

}