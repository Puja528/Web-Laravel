<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data Diri
        $name = "Puja Erista";
        $tanggal_lahir = "2005-05-11";
        $hobbies = ["Membaca", "Menulis", "Coding", "Design", "Olahraga"];
        $tgl_harus_wisuda = "2028-08-01";
        $current_semester = 3;
        $future_goal = "Menjadi Software Engineer";

        // Hitung umur
        $today = new DateTime();
        $birthdate = new DateTime($tanggal_lahir);
        $my_age = $today->diff($birthdate)->y;

        // Hitung jarak hari ke wisuda
        $wisuda = new DateTime($tgl_harus_wisuda);
        $time_to_study_left = $today->diff($wisuda)->days;

        if ($current_semester < 3) {
            $motivasi = "Masih Awal, Kejar TAK";
        } else {
            $motivasi = "Jangan main-main, kurang-kurangi main game!";
        }

        $data = [
            "name" => $name,
            "my_age" => $my_age,
            "hobbies" => $hobbies,
            "tgl_harus_wisuda" => $tgl_harus_wisuda,
            "time_to_study_left" => $time_to_study_left,
            "current_semester" => $current_semester,
            "motivasi" => $motivasi,
            "future_goal" => $future_goal
        ];

        return view('home', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
