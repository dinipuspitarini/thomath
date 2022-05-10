<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiAnak;

class LihatNilaiController extends Controller
{
    public function view($id){
        $nilai = NilaiAnak::join('anak', 'nilai_anak.anak_id', '=', 'anak.id')
            ->join('judul_materi', 'nilai_anak.mapel_id', '=', 'judul_materi.id')
            ->where('anak.wali_id', '=', $id)
            ->orderBy('nilai_anak.mapel_id', "asc")
            ->get(['nilai_anak.*', 'anak.nama', 'judul_materi.nama AS materi']);
        return view('wali.lihatnilai', compact('nilai'));
    }
}

?>
