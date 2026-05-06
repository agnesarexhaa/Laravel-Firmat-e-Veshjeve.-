@extends('firmateVeshjeve.layout')
@section('content')
<br>
<div class="card"  style="margin: 15px;" >
  <div class="card-header" style="background-color:rgb(59, 177, 198); color: #fff; padding: 0px; text-align: center;">
  <h4 style="font-size: 25px; margin: 17px 0px;"> Forma per Modifikimin e të Dhënave të Firmave të Veshjes </h4>
</div>
  
  <div class="card-body">
      
      <form action="{{ url('firmateVeshjes/' .$firmateVeshjeve->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$firmateVeshjeve->id}}"  id="id"/>
        <label style="margin-bottom: 8px;">FirmaVeshjes_umfv</label></br>
        <input type="text" name="FirmaVeshjes_umfv" id="FirmaVeshjes_umfv" value="{{$firmateVeshjeve->FirmaVeshjes_umfv}}" class="form-control"></br>
        <label style="margin-bottom: 8px;">ProduktiVeshjes_umfv</label></br>
        <input type="text" name="ProduktiVeshjes_umfv" id="ProduktiVeshjes_umfv" value="{{$firmateVeshjeve->ProduktiVeshjes_umfv}}" class="form-control"></br>
        <label style="margin-bottom: 8px;">CmimiVeshjes_umfv</label></br>
        <input type="text" name="CmimiVeshjes_umfv" id="CmimiVeshjes_umfv" value="{{$firmateVeshjeve->CmimiVeshjes_umfv}}" class="form-control"></br>
        <input type="submit" value="Modifiko" style="padding: 4px 10px; border-radius: 10px; background-color:rgb(66, 73, 149);"class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop