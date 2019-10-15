@extends('admin.layouts.layout')

@section('content')
    @if(auth()->user()->hasRole('sudo'))
        <div class="row">
            <div class="col-xs-12">
                <a href="{{url('/')}}/sgc/translation/{{$category->id}}/create" class="pull-right">
                    <button type="button" class="btn btn-success btn-lg">Nova tradução</button>
                </a>
            </div>
        </div>
    @endif
    <div class="x_panel">
        <div class="x_title">
            <h2>Traducões para: {{$category->name}}</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="dashboard-widget-content">
                <div class="hidden-small">
                    <h2 class="line_30"></h2>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <div class="col-md-12 hidden-small">
                                <table class="table table-striped projects">
                                    <thead >
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th style="width: 20%">Descrição</th>
                                        <th style="width: 20%">Tradução</th>
                                        <th style="width: 20%">#Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody id="sortable">
                                    @if(! $translations->count())
                                        <tr>Não existem traduções registadas</tr>

                                    @else

                                        @foreach($translations as $translation)
                                            <tr id="item-{{$translation->id}}">
                                                <td>{{$translation->id}}</td>
                                                <td>
                                                    <a>{{$translation->description}}</a>
                                                    <br>
                                                    <small>Criado em {{$translation->created_at->toDateString()}}</small>
                                                </td>
                                                <td>
                                                    <a>{{$translation->value}}</a>
                                                    <br>
                                                </td>

                                                <td>
                                                    <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                                                    <div class="col-xs-3">
                                                    <a href="{{url('/')}}/sgc/translation/{{$category->id}}/{{$translation->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                                    </div>
                                                    @if(auth()->user()->hasRole('sudo'))
                                                    <div class="col-xs-3">
                                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$translation->id}}"><i class="fa fa-trash"></i> Eliminar </button>
                                                    </div>

                                                    <div class="modal fade bs-example-modal-sm" id="delete{{$translation->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                                    </button>
                                                                    <h4 class="modal-title" id="myModalLabel2">Eliminar</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        Tem a certeza que deseja eliminar este registo (Todas as línguas)?
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                                                                    <form style='display: inline-block'  action="{{route('admin.translation.delete', ['category_id'=>$category->id, 'id'=>$translation->id])}}" method="post">
                                                                        {{csrf_field()}}
                                                                        {{method_field('DELETE')}}
                                                                        <button  type="submit" class="btn btn-danger">Eliminar</button>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $( function() {
            $( "#sortable" ).sortable({
                placeholder: "ui-state-highlight",
                axis: 'y',
                update: function (event, ui) {
                    var data = $(this).sortable('serialize');
                    data += '&_token={{ csrf_token() }}';
                    $.ajax({
                        data: data,
                        type: 'POST',
                        url: '{{url('/')}}/sgc/priority/page'
                    });
                }
            });
            $( "#sortable" ).disableSelection();

        } );
    </script>
@endpush