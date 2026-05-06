@extends('firmateVeshjeve.layout')
@section('content')
<div class="card" style= "background-color:rgb(59, 179, 198);" >
  <div class="card-header">Forma per Shfaqjen e Firmat e Veshjeve</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">FirmaVeshjes_umfv : {{ $firmateVeshjeve->FirmaVeshjes_umfv }}</h5>
        <p class="card-text">ProduktiVeshjes_umfv : {{ $firmateVeshjeve->ProduktiVeshjes_umfv }}</p>
        <p class="card-text">CmimiVeshjes_umfv : {{ $firmateVeshjeve->CmimiVeshjes_umfv }}</p>
  </div>
      
    </hr>
    
  </div>
</div>