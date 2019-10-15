@extends('admin.layouts.layout')
@section('content')
<div class="row ">
    <div class="col-sm-12">
        <div class="x_panel tile">
            <div class="x_title">
                <h2>Dados do Candidato</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <h5>Dados principais da Candidatura: #{{$candidate->id}}</h5>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Localidade</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contacto</th>
                            <th scope="col">Mensagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$candidate->name}}</td>
                            <td>{{$candidate->address}}</td>
                            <td>{{$candidate->email}}</td>
                            <td>{{$candidate->contact}}</td>
                            <td>{{$candidate->message}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



        <div class="x_panel tile">
            <div class="x_title">
                <h2>Ficheiros</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <h5>Curriculum Vitae da Candidatura: #{{$candidate->id}}</h5>

                <div id="cv" ></div>
                 <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

<style>
    #cv{
      height:50vh;
    }
</style>

@push('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js'></script>
<script>PDFObject.embed("/storage/{{$candidate->cv}}", "#cv");</script>
@endpush