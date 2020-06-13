<?php
class CLinks extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
    public function mostrarTabla()
    {
    //   // Metodo 1 - Acceder a los datos través de las clases db de Codeigniter en Modelo
         $data['RSlinks'] = $this->Mlinks->SelectLibCI();
    //   // Metodo 2 - Acceder a los datos a través de la clase db query de Codeigniter en Modelo
    //   // $data['RSlinks']=$this->Mlinks->SelectQuery();
    //   // Metodo 3 - Acceder a los datos a través de strings de instrucciones sql desde el Controlador
    //   // Este metodo me gusta por que puede trabajar sin el modelo de datos.
    //    $data['RSlinks']=$this->Mlinks->SelectGeneric('
    //               SELECT
    //               links.id,
    //               links.nombres
    //               FROM links
    //               ORDER BY links.nombres asc');
     
      $this->load->view('header');
      $this->load->view('links/add');
      $this->load->view('links/mostrarTabla', $data);
      $this->load->view('footer');
    }

    public function add()
    {
        $this->load->view('header');
        $this->load->view('links/add');
        $this->load->view('footer');
    }

    public function save()
    {
        $this->Mlinks->insertInto();
        redirect(base_url()."index.php/clinks/mostrarTabla");
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        if ($id) {
            $this->Mlinks->delete($id);
            redirect(base_url()."index.php/clinks/mostrarTabla");
        }
    }

    public function edit($id = NULL)  {
      if ($id != NULL) {
        $data['rowEdit']= $this->Mlinks->edit($id);
        $this->load->view('header');
        $this->load->view('links/edit', $data );
        $this->load->view('footer');
      } else {
         redirect('');
      }
    }
    
    public function update($id = NULL)
    {
      $rowChanged = array(
        "id" => $this->input->post('textId'),
        "nombres" => $this->input->post('textNombres'),
      );
    
      if (isset($rowChanged)) {
        $id = $rowChanged['id'];
         $nombres = $rowChanged['nombres'];
         $this->Mlinks->update($id, $nombres);
         redirect(base_url()."index.php/Clinks/mostrarTabla");
      }
    }

    public function qualify($id = NULL)
    {
      $nada = $this->Mlinks->selectVoid("UPDATE links SET links.valoracion=(links.valoracion+1) WHERE links.id=$id");
      redirect(base_url()."index.php/Clinks/mostrarTabla");
    }
  }  
  