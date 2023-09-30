<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SuratKeteranganUsaha;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class SuratKeteranganUsahaController extends Controller
{

    public function create(Request $request)
    {
        $data = new SuratKeteranganUsaha;
        $data->id = $request->input('id');
        $data->nama =  $request->input('nama');
        $data->ttl =  $request->input('ttl');
        $data->jenis_kelamin =  $request->input('jenis_kelamin');
        $data->alamat =  $request->input('alamat');
        $data->agama =  $request->input('agama');
        $data->status_perkawinan =  $request->input('status_perkawinan');
        $data->pekerjaan =  $request->input('pekerjaan');
        $data->kewarganegaraan =  $request->input('kewarganegaraan');
        $data->nik =  $request->input('nik');
        $data->nama_usaha =  $request->input('nama_usaha');
        $data->jenis_usaha =  $request->input('jenis_usaha');
        $data->tahun_usaha =  $request->input('tahun_usaha');
        $data->lokasi_usaha =  $request->input('lokasi_usaha');
        $data->save();


        // format tgl
        $date = Carbon::createFromTimestamp(time());
        $dateString = $date->format('d F Y');

        // membuat nomor registrasi untuk nama file
        $registrationNumber = rand(1000, 999999);

        // membuat penamaan file agar tidak menimpa
        $fileName = $registrationNumber . '_' . 'Surat Keterangan Usaha' . '_' . $data->nama . '_' . $dateString . '.docx';

        // membuat 3 angka pada nomor surat secara berurutan
        $id = SuratKeteranganUsaha::find($data->id);

        $nomorSurat = str_pad($id->id, 3, '0', STR_PAD_LEFT);

        // membuat format nomor surat
        $no_surat = '510' . '/' . $nomorSurat . '/' . 'IX-2023' . '/' . 'Ds.';

        // Path ke templat Word
        $templatePath = public_path('SuratKeteranganUsaha.docx');

        // Path untuk menyimpan file hasil
        $outputPath = public_path($fileName);

        copy($templatePath, $outputPath);

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor($outputPath);

        $templateData = [
            'no_surat' => $no_surat,
            'nama' => $data->nama,
            'ttl' => $data->ttl,
            'jenis_kelamin' => $data->jenis_kelamin,
            'alamat' => $data->alamat,
            'agama' => $data->agama,
            'status_perkawinan' => $data->status_perkawinan,
            'pekerjaan' => $data->pekerjaan,
            'kewarganegaraan' => $data->kewarganegaraan,
            'nik' => $data->nik,
            'nama_usaha' => $data->nama_usaha,
            'jenis_usaha' => $data->jenis_usaha,
            'tahun_usaha' => $data->tahun_usaha,
            'lokasi_usaha' => $data->lokasi_usaha,
            'created_at' => $dateString
        ];

        foreach ($templateData as $key => $value) {
            $phpWord->setValue($key, $value);
        }

        $phpWord->saveAs($outputPath);
        
        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
