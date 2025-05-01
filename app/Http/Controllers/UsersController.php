<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }

    public function index()
    {
        $data = [
            'users_klinik' => $this->UsersModel->alldata(),
        ];
        return view('users_klinik', $data);
    }


    // ------------------ CREATE ------------------
    public function add()
    {
        return view('users_klinik_add');
    }

    public function tambah()
    {
        Request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users_klinik,email',
            'password' => 'required|min:4',
            'role' => 'required|in:admin,petugas,dokter,kasir',
        ], [
            'name.required' => 'Nama wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Format email tidak valid!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal 6 karakter!',
            'role.required' => 'Role wajib dipilih!',
            'role.in' => 'Role tidak valid!',
        ]);
    
        try {
            $data = [
                'name' => Request()->name,
                'email' => Request()->email,
                'password' => Hash::make(Request()->password),
                'role' => Request()->role,
            ];
            $this->UsersModel->tambahdata($data);
    
            return redirect()->route('users_klinik')->with('Pesan', 'Data berhasil disimpan');
        } catch (\Throwable $e) {
            return redirect()->route('users_klinik')->with('Invalid', 'Data tidak dapat disimpan, periksa kembali inputan Anda');
        }
    }

    // ------------------ DETAIL ------------------
    public function detail($id)
    {
        if (!$this->UsersModel->detailuser($id)) {
            abort(404);
        }
        $data = [
            'users_klinik' => $this->UsersModel->detailuser($id),
        ];
        return view('users_klinik_detail', $data);
    }

    // ------------------ UPDATE ------------------
    public function edit($id)
    {
        // Check if the user exists
        if (!$this->UsersModel->detailuser($id)) {
            abort(404); // User not found
        }
    
        // Get the user data for editing
        $data = [
            'users_klinik' => $this->UsersModel->detailuser($id), // Make sure to fetch the correct user
        ];
        return view('users_klinik_edit', $data); // Pass the user data to the view
    }
    
    public function update($id)
    {
        // Validate the incoming request
        Request()->validate([
            'name' => 'required',
            'email' => 'required|email', // Make sure the email is valid
            'role' => 'required', // Ensure role is selected
        ], [
            'name.required' => 'Nama wajib di isi !',
            'email.required' => 'Email wajib di isi !',
            'email.email' => 'Email tidak valid !',
            'role.required' => 'Role wajib dipilih !',
        ]);
    
        // Get the data from the request
        $role = Request()->role; // Role will be selected from the dropdown
        $data = [
            'name' => Request()->name,
            'email' => Request()->email, // Make sure email is captured
            'role' => $role, // Role selected in the form
        ];
    
        // Check if the user is updating the password
        if (Request()->password) {
            $data['password'] = Hash::make(Request()->password); // If password is provided, hash it
        }
    
        // Update the user data
        $this->UsersModel->updatedata($id, $data);
        
        // Redirect back with a success message
        return redirect()->route('users_klinik')->with('Pesan', 'Data Berhasil Diubah');
    }
    

    // ------------------ DELETE ------------------
    public function delete($id)
    {
        $this->UsersModel->hapusdata($id);
        return redirect()->route('users_klinik')->with('Pesan', 'Data Berhasil dihapus');
    }
}
