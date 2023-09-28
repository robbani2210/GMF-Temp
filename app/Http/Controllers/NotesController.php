<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DynamoDB\device_data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class NotesController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $timestamp)
    {
        DB::table('device_data')
            ->key([
                'timestamp' => $timestamp,
            ])->updateItem([
                'catatan' => $request->input('catatan'), 
            ]);

        return redirect()->back()->with('update', 'Product updated successfully');
    }
}
