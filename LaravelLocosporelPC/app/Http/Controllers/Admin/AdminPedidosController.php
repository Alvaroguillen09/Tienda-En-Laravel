<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminPedidosController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Pedidos - Online Store";
        $viewData["subtitle"] = "Pedidos";
        $viewData["order"] = Order::all();
        return view('admin.pedidos.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Order::validate($request);

        $newOrder = new Order();
        $newOrder->setTotal($request->input('total'));
        $newOrder->setUserId($request->input('user_id'));
        $newOrder->save();

        return back();
    }

    public function delete($id)
    {
        Order::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit User - Online Store";
        $viewData["order"] = Order::findOrFail($id);
        return view('admin.pedidos.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        Order::validate($request);

        $user = Order::findOrFail($id);
        $user->setTotal($request->input('total'));
        $user->setUserId($request->input('user_id'));
        $user->save();
        return redirect()->route('admin.pedidos.index');
    }
}