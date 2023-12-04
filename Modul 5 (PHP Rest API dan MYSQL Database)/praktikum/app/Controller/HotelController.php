<?php

namespace app\Controller;

include 'app/Models/Hotel.php';
include 'app/Traits/ApiResponseFormatter.php';

use app\Models\Hotels;
use app\Traits\ApiResponseFormatter;

class HotelController
{
    use ApiResponseFormatter;

    public function index()
    {
        $hotelsModel = new Hotels();
        $response = $hotelsModel->findAll();
        return $this->apiResponse(200, 'Success', $response);
    }

    public function getById($id)
    {
        $hotelsModel = new Hotels();
        $response = $hotelsModel->findById($id);
        return $this->apiResponse(200, 'Success', $response);
    }

    public function insert()
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Error Invalid Input", null);
        }

        $hotelsModel = new Hotels();
        $response = $hotelsModel->create([
            'name_hotel' => $inputData['name_hotel'],
            'address_hotel' => $inputData['address_hotel'],
            'rating_hotel' => $inputData['rating_hotel'],
        ]);

        return $this->apiResponse(200, 'Success', $response);
    }

    public function update($id)
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Error Invalid Input", null);
        }

        $hotelsModel = new Hotels();
        $response = $hotelsModel->update([
            'name_hotel' => $inputData['name_hotel'],
            'address_hotel' => $inputData['address_hotel'],
            'rating_hotel' => $inputData['rating_hotel'],
        ], $id);

        return $this->apiResponse(200, 'Success', $response);
    }

    public function delete($id)
    {
        $hotelsModel = new Hotels();
        $response = $hotelsModel->delete($id);

        return $this->apiResponse(200, 'Succes', $response);
    }
}
