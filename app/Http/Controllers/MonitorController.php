<?php

namespace App\Http\Controllers;

use App\Models\Entrance;
use App\Models\Event;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MonitorController extends Controller
{
        function index() {
            $dataEvent = Event::orderBy('nama')->get();
            return view('monitor.index',compact('dataEvent'));
        }
        function show($id) {
            $dataEvent = Event::find($id);
             if (!$dataEvent) {
                return redirect()->route("monitor.index")->with('message', "Event tidak ada")->with('Class', 'danger');
            }
            return view('monitor.tap',compact('dataEvent'));
        }
        function store(Request $request) {
            $event_id = $request->event_id;
            $barcode = $request->barcode;

             $dataEvent = Event::find($event_id);

            //  check Event
            if (!$dataEvent) {
                return redirect()->route("monitor.index")->with('message', "Event tidak ada")->with('Class', 'danger');
            }
            //  check Peserta

             $peserta = Peserta::whereKode($barcode)->first();
            if (!$peserta) {

                return redirect()->route("monitor.show", $dataEvent->id)->with('message', "Peserta tidak ada")->with('Class', 'danger');
            }

             $hadir = Entrance::where('event_id', $event_id)->where('peserta_id',$peserta->id)->first();

            if ($hadir) {
                return redirect()->route("monitor.show", $dataEvent->id)->with('message', "Peserta Sudah Masuk")->with('Class', 'danger');
            }
            $now = Carbon::now();

            $hadir = new Entrance();
            $hadir->peserta_id = $peserta->id;
            $hadir->bidang_id = $peserta->bidang_id;
            $hadir->jabatan_id = $peserta->jabatan_id;
            $hadir->event_id = $dataEvent->id;
            $hadir->kota_id = $dataEvent->kota_id;
            $hadir->tanggal_masuk = $now;
            $hadir->save();

            return redirect()->route("monitor.show", $dataEvent->id)->with('success', "Peserta dipersilahkan masuk")->with('Class', 'primary');

            // return view('monitor.tap',compact('dataEvent'));
        }
        function tap(Request $request) {
            $event_id = $request->event_id;
            $barcode = $request->barcode;

             $dataEvent = Event::find($event_id);

            //  check Event
            if (!$dataEvent) {
                  return $this->sendError("Event tidak ada", "", 404);

            }
            //  check Peserta

             $peserta = Peserta::whereKode($barcode)->first();
            if (!$peserta) {
                  return $this->sendError("Peserta tidak ada", "", 404);
            }

             $hadir = Entrance::where('event_id', $event_id)->where('peserta_id',$peserta->id)->first();

            // if ($hadir) {
            //       return $this->sendError("Peserta sudah masuk", "", 404);

            // }
            $now = Carbon::now();

            $hadir = new Entrance();
            $hadir->peserta_id = $peserta->id;
            $hadir->bidang_id = $peserta->bidang_id;
            $hadir->jabatan_id = $peserta->jabatan_id;
            $hadir->event_id = $dataEvent->id;
            $hadir->kota_id = $dataEvent->kota_id;
            $hadir->tanggal_masuk = $now;
            $hadir->save();

            $response = [
                'success' => true,
                'message' => "Peserta dipersilahkan masuk",
                'code' => '200'
            ];

            return response()->json($response, 200);


            // return view('monitor.tap',compact('dataEvent'));
        }
}
