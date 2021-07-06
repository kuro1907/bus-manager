<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\StaffsRepository;
use App\Repositories\Contracts\TripsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StaffsController extends Controller
{
    protected $staffsRepository;
    protected $tripsRepository;

    public function __construct(StaffsRepository $staffsRepository, TripsRepository $tripsRepository)
    {
        $this->staffsRepository = $staffsRepository;
        $this->tripsRepository = $tripsRepository;
    }

    public function index()
    {
        $staffs = $this->staffsRepository->getAll();
        // return view('staffs.list', compact('staffs'));
        return response()->json($staffs);
    }

    public function show($id)
    {
        $staff = $this->staffsRepository->get($id);
        $trips = $this->tripsRepository->getByStaff($id);
        // return view('staffs.detail', compact('staff', 'trips'));
        return response()->json($staff);
    }

    public function create()
    {
        return view('staffs.create');
    }

    public function store(Request $request)
    {
        $attributes = [
            'name' => $request->name,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'identity_number' => $request->identity_number,
            'role_code' => $request->role_code,
            'last_worktime' => strtotime(date("Y-m-d H:i:s")),
            'status' => 1
        ];
        $staff_id = $this->staffsRepository->create($attributes);
        if (isset($staff_id)) {
            $store_success = true;
            // $birthyear = date("Y", strtotime($request->birthday));
            // $age = date("Y") - $birthyear;
            // $attributes = [
            //     'name' => $request->name,
            //     'user_name' => $request->user_name,
            //     'password' => $request->password,
            //     'age' => $age,
            //     'gender' => $request->gender,
            //     'role_code' => $request->role,
            //     'staff_id' => $staff_id
            // ];
            // $this->staffsRepository->createUser($attributes);
        } else $store_success = false;

        if ($store_success) Session::flash('success', 'Đã thêm thông tin nhân viên thành công');
        else Session::flash('fail', 'Đã có lỗi xảy ra');

        return response()->json('ok');
    }

    public function edit($id)
    {
        $staff = $this->staffsRepository->get($id);
        return view('staffs.edit', compact('staff'));
    }

    public function update($id, Request $request)
    {
        $attributes = [
            'name' => $request->name,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'identity_number' => $request->identity_number,
            'role_code' => $request->role
        ];
        $edit_success = $this->staffsRepository->update($id, $attributes);

        if ($edit_success) Session::flash('success', 'Đã chỉnh sửa thông tin nhân viên thành công');
        else Session::flash('fail', 'Đã có lỗi xảy ra');


        return response()->json('ok');
    }

    public function delete($id)
    {
        return view('staffs.delete', compact('id'));
    }

    public function destroy($id)
    {
        $this->staffsRepository->delete($id);

        return response()->json('ok');
    }
}
