<?php

declare(strict_types=1);

namespace App\Controller;

class ProductController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel("Products");
    }

    public function createProduct()
    {
        $product = $this->Products->newEmptyEntity();

        if ($this->request->is("post")) {

            $data = $this->request->getData();
            $productImage = $this->request->getData("image");

            $hasFileError = $productImage->getError();

            if ($hasFileError > 0) {
                // no file uploaded
                $data["image"] = "";
            } else {
                // file uploaded
                $fileName = $productImage->getClientFilename();
                $fileType = $productImage->getClientMediaType();

                if ($fileType == "image/png" || $fileType == "image/jpeg" || $fileType == "image/jpg") {
                    $imagePath = WWW_ROOT . "img/" . $fileName;
                    $productImage->moveTo($imagePath);
                    $data["image"] = "img/" . $fileName;
                }
            }

            $product = $this->Products->patchEntity($product, $data);

            if ($this->Products->save($product)) {
                $this->Flash->success("Product created successfully");
            } else {
                $this->Flash->error("Failed to create product");
            }
        }

        $this->set(compact("product"));
    }
}
