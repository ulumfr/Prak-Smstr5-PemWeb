<?php

namespace app\Controller;

include 'app/Models/Room.php';

use app\Models\Rooms;
use app\Traits\ApiResponseFormatter;

class RoomController
{
    use ApiResponseFormatter;

    public function index()
    {
        $roomsModel = new Rooms();
        $response = $roomsModel->findAll();
        return $this->apiResponse(200, 'Success', $response);
    }

    public function getById($id)
    {
        $roomsModel = new Rooms();
        $response = $roomsModel->findById($id);
        return $this->apiResponse(200, 'Success', $response);
    }

    public function insert()
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Error Invalid Input", null);
        }

        $roomsModel = new Rooms();
        $response = $roomsModel->create([
            'hotels_id' => $inputData['hotels_id'],
            'room_type' => $inputData['room_type'],
            'room_price' => $inputData['room_price'],
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

        $roomsModel = new Rooms();
        $response = $roomsModel->update([
            'hotels_id' => $inputData['hotels_id'],
            'room_type' => $inputData['room_type'],
            'room_price' => $inputData['room_price'],
        ], $id);

        return $this->apiResponse(200, 'Success', $response);
    }

    public function delete($id)
    {
        $roomsModel = new Rooms();
        $response = $roomsModel->delete($id);

        return $this->apiResponse(200, 'Succes', $response);
    }
}
