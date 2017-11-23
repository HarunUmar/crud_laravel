<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\AturId; // use method from other class , this method for set automatic id
use App\Barang;  
use Alert; // use alart for notifacation
use Validator;
class BarangController extends Controller
{
  

	protected $head;

	public function __construct(){
		return $this->middleware('auth');
	}

	//start of the app
	public function Index(){
	 $head =  $this->head = "List Barang";
	  $result = Barang::orderBy('id_barang','desc')->paginate(2);
	  return view('home',compact('result','head'));
	}

	//store data to database
	public function Store(Request $request){
		$input = $request->all();

		$validator = Validator::make($input,[
				'nama_barang' => 'required',
				'tanggal_masuk' => 'required'
				]);

		if($validator->fails()){
			return redirect()->route('home')
							->withInput()
							->withErrors($validator);
		}
		$input['id_barang'] = AturId::Atur("id_barang","barang","brng","5","8");
		Barang::create($input);
		return redirect()->route('home');
	}
	
	//show data for editing
	public function Show($id){
		$head = $this->head = "Edit Barang";
		$result = Barang::where('id_barang',$id)->first();
		return view('edit',compact('result','head'));
	}
	
	// update datang to database 
	public function Edit(Request $request){
		$edit  = Barang::where('id_barang',$request->id_barang);
		$edit->update($request->except('_token'));
		Alert::success('Data telah diubah', 'Berhasil');
		return redirect()->route("home");
	}

	//delete data from database
	public function Destroy(Request $request){
		$destroy = Barang::Where('id_barang',$request->id_barang);
		$destroy->delete();
		return redirect()->route('home');

	}
	 /*
	 search data from database
	 note logic using % key $, sorry meybe not like this, but this just as an example
	
	*/
	public function Search(Request $request){

		$head  = $this->head = "Hasil Pencarian";
		$result = Barang::where('nama_barang','LIKE','%'.$request->key.'%')->orderBy('id_barang','desc')->paginate(2);
		if(count($result) > 0 ){
			Alert::success('Found',$request->key);
		}
		else {
			Alert::error('Not Found', 'Data tidak Ditemukan');
		}
		return view('home',compact('result','head'));
	}




}
