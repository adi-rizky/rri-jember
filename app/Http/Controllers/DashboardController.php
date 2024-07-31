<?php

namespace App\Http\Controllers;
use App\Models\PaketIklan;
use App\Models\Kategori;
use App\Models\PengajuanIklan;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function kategori()
    {
        $kategori = kategori::all();
        return view('admin.pages.kategori',compact('kategori'));
    }
    public function pengajuan(Request $request)
    {
        $query = PengajuanIklan::query();
    
    if ($request->has('start_date') && $request->has('end_date')) {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        if (strtotime($startDate) && strtotime($endDate)) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }
    }
    
    $pengajuaniklan = $query->get();
    
    return view('admin.pages.pengajuan', compact('pengajuaniklan'));

    }
    public function detailPengajuan($id)
    {
        $pengajuaniklan = PengajuanIklan::findOrFail($id);
        return view('admin.pages.detailPengajuan',compact('pengajuaniklan'));
    }
    public function paketIklan()
    {
        $paketIklan = PaketIklan::all();
        return view('admin.pages.paketIklan',compact('paketIklan'));
    }
    public function dashboard()
    {
        return view('admin.index');
    }
    public function awal()
    {
        $kategori = kategori::all();
        $paketIklan = paketIklan::all();
        return view('rri.index',compact('kategori','paketIklan'));
    }
    public function riwayat()
    {
        return view('admin.pages.riwayatpesanan');
    }

    public function exportToExcel(Request $request)
    {
        $query = PengajuanIklan::query();
        
        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            
           
            if (strtotime($startDate) && strtotime($endDate)) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            }
        }
        
        $pengajuaniklan = $query->get();
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        
        $sheet->setCellValue('A1', 'No'); 
        $sheet->setCellValue('B1', 'ID');
        $sheet->setCellValue('C1', 'Nama Lengkap');
        $sheet->setCellValue('D1', 'Nama Usaha');
        $sheet->setCellValue('E1', 'Nomor Telepon');
        $sheet->setCellValue('F1', 'Paket Iklan');
        $sheet->setCellValue('G1', 'Kategori Iklan');
        $sheet->setCellValue('H1', 'Harga');
        $sheet->setCellValue('I1', 'Unggah Materi');
        $sheet->setCellValue('J1', 'Bukti Pembayaran');
        $sheet->setCellValue('K1', 'Catatan Tambahan');
        $sheet->setCellValue('L1', 'Status');
        
        
        $row = 2;
        $serialNumber = 1; 
        foreach ($pengajuaniklan as $data) {
            $sheet->setCellValue('A' . $row, $serialNumber); 
            $sheet->setCellValue('B' . $row, $data->id);
            $sheet->setCellValue('C' . $row, $data->nama_lengkap);
            $sheet->setCellValue('D' . $row, $data->nama_usaha);
            $sheet->setCellValue('E' . $row, $data->nomor_telepon);
            $sheet->setCellValue('F' . $row, $data->paket_iklan);
            $sheet->setCellValue('G' . $row, $data->kategori_iklan);
            $sheet->setCellValue('H' . $row, $data->harga);
            $sheet->setCellValue('I' . $row, $data->unggah_materi);
            $sheet->setCellValue('J' . $row, $data->bukti_pembayaran);
            $sheet->setCellValue('K' . $row, $data->catatan_tambahan);
            $sheet->setCellValue('L' . $row, $data->status);
            $row++;
            $serialNumber++; 
        }
        
        $writer = new Xlsx($spreadsheet);
        $filename = 'pengajuan_iklan_' . date('Ymd_His') . '.xlsx';
        
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        
        
        $writer->save('php://output');
        exit;
    }

}
