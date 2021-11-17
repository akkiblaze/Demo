<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function list()
    {
        $this->data['list']= Device::all();
        return($this->data);
    }
    public function find_list($id=null)
    {
        $this->data['list']= $id?Device::find($id):Device::all();
        return($this->data);
    }
    public function addlist(Request $req)
    {
       $device = new Device;
       $device->name = $req->name;
       $device->member_id = $req->member_id;
       $result = $device->save();
       if($result)
       {
           return["Data Successfully added."];
       }
       else
       {
           return["Please try again."];
       }
    }
    public function updatelist(Request $req)
    {
       $device = Device::find($req->id);
       $device->name = $req->name;
       $device->member_id = $req->member_id;
       $result = $device->save();
       if($result)
       {
           return["Data Successfully updated."];
       }
       else
       {
           return["Please try again."];
       }
    }
    public function search($data)
    {
        $this->data['list']= Device::where("name","like","%".$data."%")->get();
        return($this->data);
    }
    public function delete($data)
    {
        $list = Device::find($data);
        $this->data['result'] = $list->delete(); 
        if($this->data['result'])
        {
            return["Data Deleted Successfully."];
        }
        else
        {
            return["Please try again."];
        }
        
    }
}
