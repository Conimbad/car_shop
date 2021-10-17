<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Car;

class Cars extends Controller{

  public function index() {
    $car = new Car();

    $data['cars'] = $car->orderBy('id', 'ASC')->findAll();
    $data['header'] = view('template/header');
    $data['footer'] = view('template/footer');

    return view('cars/list', $data);
  }

  public function create () {
    
    $data['header'] = view('template/header');
    $data['footer'] = view('template/footer');

    return view('cars/create', $data);
  }

  public function save () {

    $car = new Car();

    $validation = $this->validate([
      'marca'=> 'required',
      'modelo' => 'required',
      'matricula' => 'required',
      'cilindrada' => 'required',
      'potencia' => 'required',
      'color' => 'required',
      'motor' => 'required',
      'precio' => 'required',
      'imagen' => [
        'uploaded[imagen]',
        'mime_in[imagen,image/jpg,image/jpeg,image/png]',
        'max_size[imagen,1024]',
      ]
    ]);

    if (!$validation) {
      $session = session();
      $session->setFlashdata('message', 'Llene todos los campos');

      return redirect()->back()->withInput();
    }
    
    if ($image = $this->request->getFile('imagen')) {
      $newName = $image->getRandomName();
      $image->move('../public/uploads', $newName);
      $data = [
        'marca'=> $this->request->getVar('marca'),
        'modelo' => $this->request->getVar('modelo'),
        'matricula' => $this->request->getVar('matricula'),
        'cilindrada' => $this->request->getVar('cilindrada'),
        'potencia' => $this->request->getVar('potencia'),
        'color' => $this->request->getVar('color'),
        'motor' => $this->request->getVar('motor'),
        'precio' => $this->request->getVar('precio'),
        'foto' => $newName
      ];
      $car->insert($data);

    }
    return $this->response->redirect(site_url('/list'));
  }

  public function delete ($id = null) {
    $car = new Car();
    $carData = $car->where('id', $id)->first();

    $route = ('../public/uploads/'.$carData['foto']);
    unlink($route); 

    $car->where('id', $id)->delete($id);

    return $this->response->redirect(site_url('/list'));
  } 

  public function edit ($id = null) {

    $car = new Car();
    $data['car'] = $car->where('id', $id)->first();

    $data['header'] = view('template/header');
    $data['footer'] = view('template/footer');

    return view('cars/edit', $data);
  }

  public function update () {
    $car = new Car();

    $data = [
      'marca'=> $this->request->getVar('marca'),
      'modelo' => $this->request->getVar('modelo'),
      'matricula' => $this->request->getVar('matricula'),
      'cilindrada' => $this->request->getVar('cilindrada'),
      'potencia' => $this->request->getVar('potencia'),
      'color' => $this->request->getVar('color'),
      'motor' => $this->request->getVar('motor'),
      'precio' => $this->request->getVar('precio')
    ];
    $id = $this->request->getVar('id');

    $validation = $this->validate([
      'marca'=> 'required',
      'modelo' => 'required',
      'matricula' => 'required',
      'cilindrada' => 'required',
      'potencia' => 'required',
      'color' => 'required',
      'motor' => 'required',
      'precio' => 'required'
    ]);

    if (!$validation) {
      $session = session();
      $session->setFlashdata('message', 'Llene todos los campos');

      return redirect()->back()->withInput();
    }

    $car->update($id, $data);

    $validation = $this->validate([
      'imagen' => [
        'uploaded[imagen]',
        'mime_in[imagen,image/jpg,image/jpeg,image/png]',
        'max_size[imagen,1024]',
      ]
    ]);

    if ($validation) {
      if ($image = $this->request->getFile('imagen')) {

        $carData = $car->where('id', $id)->first();
        $route = ('../public/uploads/'.$carData['foto']);
        unlink($route); 

        $newName = $image->getRandomName();
        $image->move('../public/uploads', $newName);
        
        $data = ['foto' => $newName];
        $car->update($id, $data);
  
      }
    }
    return $this->response->redirect(site_url('/list'));
  }

  public function search () {

    $car = new Car();
    
    $busqueda = $this->request->getVar('buscar');

    // Validation search input
    $validation =  $this->validate([
      'buscar'=> 'required'
    ]);
    if (!$validation) {
      $session = session();
      $session->setFlashdata('message', 'Debe escribir una marca');

      return redirect()->back()->withInput();
    }

    $data['result'] = $car->where('marca', $busqueda)->findAll();
    $data['header'] = view('template/header');
    $data['footer'] = view('template/footer');
    
    return view('cars/search', $data);

  }
}