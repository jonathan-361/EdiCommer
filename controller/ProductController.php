<?php
require_once './model/Product.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new Product();
    }

    public function index() {
        $productos = $this->model->getAll();
        include './view/product_list.php';
    }

    public function create() {
        include './view/product_form.php';
    }

    public function store() {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $stock = $_POST['stock'];

        if (empty($nombre) || empty($precio) || empty($categoria) || empty($stock)) {
            $error = "Todos los campos son obligatorios.";
            include './view/product_form.php';
            return;
        }

        $this->model->add($nombre, $precio, $categoria, $stock);
        header("Location: index.php");
    }

    public function edit($id) {
        $producto = $this->model->getById($id);
        include './view/product_form.php';
    }

    public function update($id) {
        $this->model->update($id, $_POST['nombre'], $_POST['precio'], $_POST['categoria'], $_POST['stock']);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }

    public function show($id) {
        $producto = $this->model->getById($id);
        include './view/product_detail.php';
    }
}
