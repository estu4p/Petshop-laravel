<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      if(request()->ajax()){
        $query = User::query();

        return DataTables::of($query)
          ->addColumn('action', function($item){
            return '<a href="'. route('dashboard.user.edit', $item->id) .'" class="inline-block border border-gray-500 bg-gray-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-gray-700 focus:outline-none focus:shadow-outline">
                    Edit
                  </a>
                  <form class="inline-block" action="'. route('dashboard.user.destroy', $item->id) .'" method="POST">
                    <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-700 focus:outline-none focus:shadow-outline">
                      Hapus
                    </button>
                      '. method_field('delete') . csrf_field().'
                  </form>
                  ';
          })
          ->rawColumns(['action'])
          ->make();
      }

      return view('pages.dashboard.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
      return view('pages.dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
      $data = $request->all();
      $user->update($data);
      return redirect()->route('dashboard.user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
      $user->delete();
      return redirect()->route('dashboard.user.index');
    }
}
