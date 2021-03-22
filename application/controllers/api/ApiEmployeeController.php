<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class ApiEmployeeController extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeeModel');
    }

    public function index_get(){
        $employee = new EmployeeModel;
        $result_emp = $employee->get_employee();
        $this->response($result_emp,200);
    }

    public function storeEmployee_post(){
     	$employee = new EmployeeModel;

        $data = [
        	'first_name' => $this->input->post('first_name'),
        	'last_name' => $this->input->post('last_name'),
        	'phone' => $this->input->post('phone'),
        	'email' => $this->input->post('email'),
        ];

        $result = $employee->insertEmployee($data);

        if($result > 0){
        	$this->response([
        		'status' => true,
        		'message' => 'New Employee Created'
        	], RestController::HTTP_OK);
        }else{
        	$this->response([
        		'status' => true,
        		'message' => 'Failed to create Employee'
        	], RestController::HTTP_BAD_REQUEST);
        }

        $this->response($data,200);
    }

    public function findEmployee_get($id){
    	$employee = new EmployeeModel;
        $result = $employee->edit_employee($id);
        $this->response($result,200);
    }

    public function updateEmployee_put($id){
     	$employee = new EmployeeModel;

        $data = [
        	'first_name' => $this->put('first_name'),
        	'last_name' => $this->put('last_name'),
        	'phone' => $this->put('phone'),
        	'email' => $this->put('email'),
        ];

        $update_result = $employee->update_employee($id,$data);

        if($update_result > 0){
        	$this->response([
        		'status' => true,
        		'message' => 'Employee Updated'
        	], RestController::HTTP_OK);
        }else{
        	$this->response([
        		'status' => true,
        		'message' => 'Failed to update Employee'
        	], RestController::HTTP_BAD_REQUEST);
        }

        $this->response($data,200);
    }

    public function deleteEmployee_delete($id){
    	$employee = new EmployeeModel;
        $result = $employee->delete_employee($id);
        if($result > 0){
        	$this->response([
        		'status' => true,
        		'message' => 'Employee Deleted'
        	], RestController::HTTP_OK);
        }else{
        	$this->response([
        		'status' => true,
        		'message' => 'Failed to Deleted Employee'
        	], RestController::HTTP_BAD_REQUEST);
        }
    }

}

?>