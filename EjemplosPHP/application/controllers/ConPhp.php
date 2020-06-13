<?php
class ConPhp extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }


    public function FunFrontEnd($archivo)
    {
        $archivo=$this->uri->segment(3);
        $this->load->view($archivo);
    }

    public function FunDisplayFrontEnd($archivo)
    {
        $archivo=$this->uri->segment(3);
        $this->load->view('header');
        $this->load->view($archivo);
        $this->load->view('footer');
    }




    public function crud()
    {
    //   // Metodo 1 - Acceder a los datos través de las clases db de Codeigniter en Modelo
         $data['RSfrases'] = $this->Mfrases->SelectLibCI();
    //   // Metodo 2 - Acceder a los datos a través de la clase db query de Codeigniter en Modelo
    //   // $data['RSfrases']=$this->Mfrases->SelectQuery();
    //   // Metodo 3 - Acceder a los datos a través de strings de instrucciones sql desde el Controlador
    //   // Este metodo me gusta por que puede trabajar sin el modelo de datos.
    //    $data['RSfrases']=$this->Mfrases->SelectGeneric('
    //               SELECT
    //               frases.id,
    //               frases.nombres
    //               FROM frases
    //               ORDER BY frases.nombres asc');
     
      $this->load->view('header');
      $this->load->view('frases/add');
      $this->load->view('frases/crud', $data);
      $this->load->view('footer');
    }

    public function add()
    {
        $this->load->view('header');
        $this->load->view('frases/add');
        $this->load->view('footer');
    }

    public function save()
    {
        $this->Mfrases->insertInto();
        redirect(base_url()."index.php/cfrases/crud");
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        if ($id) {
            $this->Mfrases->delete($id);
            redirect(base_url()."index.php/cfrases/crud");
        }
    }

    public function edit($id = NULL)  {
      if ($id != NULL) {
        $data['rowEdit']= $this->Mfrases->edit($id);
        $this->load->view('header');
        $this->load->view('frases/edit', $data );
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
         $this->Mfrases->update($id, $nombres);
         redirect(base_url()."index.php/Cfrases/crud");
      }
    }

    public function qualify($id = NULL)
    {
      $nada = $this->Mfrases->selectVoid("UPDATE frases SET frases.valoracion=(frases.valoracion+1) WHERE frases.id=$id");
      redirect(base_url()."index.php/Cfrases/crud");
    }
  }  
  