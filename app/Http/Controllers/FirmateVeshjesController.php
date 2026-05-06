<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\FirmateVeshjes;
 
class FirmateVeshjesController extends Controller
{
    public function index()
    {
        $firmateVeshjeve = FirmateVeshjes::all();
        return view ('firmateVeshjeve.index')->with('firmateVeshjeve', $firmateVeshjeve);
    }
 
    
    public function create()
    {
        return view('firmateVeshjeve.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        FirmateVeshjes::create($input);
        return redirect('firmateVeshjes')->with('flash_message', 'Te Dhënat te Firma e Veshjes u Shtua!');  
    }
 
    
    public function show($id)
    {
        $firmateVeshjes = FirmateVeshjes::find($id);
        return view('firmateVeshjeve.show')->with('firmateVeshjeve', $firmateVeshjes);
    }
 
    
    public function edit($id)
    {
        $firmateVeshjes = FirmateVeshjes::find($id);
        return view('firmateVeshjeve.edit')->with('firmateVeshjeve', $firmateVeshjes);
    }
 
  
    public function update(Request $request, $id)
    {
        $firmateVeshjes = FirmateVeshjes::find($id);
        $input = $request->all();
        $firmateVeshjes->update($input);
        return redirect('firmateVeshjes')->with('flash_message', 'Te Dhënat te Firma e Veshjes u Modifikua!');  
    }
 
   
    public function destroy($id)
    {
        FirmateVeshjes::destroy($id);
        return redirect('firmateVeshjes')->with('flash_message', 'Te Dhënat te Firma e Veshjes u Fshi!');  
    }
}