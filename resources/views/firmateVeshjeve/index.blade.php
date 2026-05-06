    @extends('firmateVeshjeve.layout')
    @section('content')
        <div class="container" style="margin: 15px;">
            <div class="row" >
                <div class="col-md-12" ><br>
                    <div class="card">
                        <div class="card-header" style="background-color:rgb(44, 165, 178); color: #fff; padding: 5px; text-align: center; ">
                            <h2 style="font-size: 26px; margin: 20px 0;">Uebaplikacioni per Menaxhimin e Firmave te Veshjes (UMFV)</h2>
                        </div>
                        <div class="card-body" style="padding: 25px;" >

                    <!-- Flash Message -->
                    @if (session('flash_message'))
                            <div class="alert alert-success text-center" style="margin-bottom: 20px;">
                                {{ session('flash_message') }}
                            </div>
                        @endif
                        
                            <a href="{{ url('/firmateVeshjes/create') }}" class="btn btn-success btn-sm"  style="padding: 8px 15px; border-radius: 10px ;  border: 1px solid #429559; background-color:rgb(66, 149, 128); " title="Shto të Dhënat e Firmave të Veshjes"
                            </a>
                                <i class="fa fa-plus" aria-hidden="true"></i> Shto të Dhënat e Firmave të Veshjes
                            </a>
                            <br/>
                            <br/>
                            <div class="table-responsive"  >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>FirmaVeshjes_umfv</th>
                                            <th>ProduktiVeshjes_umfv</th>
                                            <th>QmimiVeshjes_umfv</th>
                                            <th>Funksionet </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($firmateVeshjeve as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->FirmaVeshjes_umfv }}</td>
                                            <td>{{ $item->ProduktiVeshjes_umfv }}</td>
                                            <td>{{ $item->CmimiVeshjes_umfv }}</td>
                                            <td>
                                                
                                                <a href="{{ url('/firmateVeshjes/' . $item->id . '/edit') }}" title="Modifiko të Dhënat Firmat e Veshjes"><button style="padding: 4px 10px; border-radius: 10px; background-color: #2885ff; " class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifiko</button></a>
                                                <form method="POST" action="{{ url('/firmateVeshjes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" style="padding: 4px 10px; border-radius: 10px; background-color:rgb(242, 38, 52);" class="btn btn-danger btn-sm" title="Fshi të Dhënat Firmat e Veshjes" onclick="return confirm(&quot;Jeni të sigurt që dëshironi ta fshini këto të dhënat te firmat e veshjes?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Fshije</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection