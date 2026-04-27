<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function store(Request $request)
    {
        $guest = Guest::create([
            'name'=>$request->name,
            'institution'=>$request->institution,
            'purpose'=>$request->purpose,
            'visit_date'=>$request->visit_date
        ]);

        return response()->json([
            'message'=>'Data tamu berhasil ditambahkan',
            'data'=>$guest
        ]);
    }
    public function index()
{
    $guests = \App\Models\Guest::latest()->get();

    return response()->json([
        'data'=>$guests
    ]);
}
public function search($name)
{
    $guest = \App\Models\Guest
            ::where('name','like',"%$name%")
            ->get();

    return response()->json([
        'data'=>$guest
    ]);
}
public function destroy($id)
{
    $guest = \App\Models\Guest::find($id);

    if(!$guest){
        return response()->json([
            'message'=>'Data tidak ditemukan'
        ],404);
    }

    $guest->delete();

    return response()->json([
        'message'=>'Data berhasil dihapus'
    ]);
}
public function logout(Request $request)
{
    $request->user()->tokens()->delete();

    return response()->json([
      'message'=>'Logout berhasil'
    ]);
}
public function update(Request $request, $id)
{
    $guest = \App\Models\Guest::find($id);

    if(!$guest){
        return response()->json([
            'message'=>'Data tidak ditemukan'
        ],404);
    }

    $guest->update([
        'name'=>$request->name,
        'institution'=>$request->institution,
        'purpose'=>$request->purpose,
        'visit_date'=>$request->visit_date
    ]);

    return response()->json([
        'message'=>'Data berhasil diupdate',
        'data'=>$guest
    ]);
}
public function approve($id)
{
   $guest = \App\Models\Guest::find($id);

   $guest->update([
      'status'=>'Disetujui'
   ]);

   return response()->json([
      'message'=>'Kunjungan disetujui',
      
      'data'=>$guest->fresh()
   ]);
}
public function dashboard()
{
   return response()->json([
      'total_tamu'=> \App\Models\Guest::count(),
      'approved'=> \App\Models\Guest
          ::where('status','Disetujui')
          ->count(),

      'pending'=> \App\Models\Guest
          ::where('status','Pending')
          ->count()
   ]);
}
}