@extends('admin.layouts.layout')
@section('content')

        <div class="row">
            <div class="col-xs-12">
                @if( $main_page->form != '_call_to_actions' && $main_page->form != '_general_contacts')
                    <a href="{{url('/')}}/sgc/content/{{$main_page->slug}}/create" class="pull-right">
                        <button type="button" class="btn btn-success btn-lg">Criar registo</button>
                    </a>
                @endif
                @if($main_page->hasChildrens())
                <a class="btn btn-success btn-lg pull-right" href="{{url('/sgc/category/article?parent_id='.$main_page->id)}}">
                    Categorias
                </a>
                @endif
            </div>
        </div>


    <div class="x_panel">
        <div class="x_title">
            <h2>Index {{$main_page->name}}</h2>
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
                                    <thead>
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th style="width: 20%">titulo</th>
                                        <th style="width: 20%">Status</th>
                                        <th style="width: 20%">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody id="sortable">
                                    @if(! $content->count())
                                        <tr>Não existem páginas registadas</tr>
                                    @else
                                        @foreach($content as $page)

                                            <tr id="item-{{$page->id}}" class="ui-state-default">
                                                <td>#</td>
                                                <td>
                                                    <a>{{$page->title}}</a>
                                                    <br>
                                                    <small>Criado em {{$page->created_at->toDateString()}}</small>
                                                </td>

                                                <td>
                                                    {!! Form::model($page->id, ['action'=>['admin\ContentController@activate', $page->id], 'class'=>'activate-form' ]) !!}
                                                    {{method_field('PATCH')}}

                                                    {!! Form::hidden('active', null) !!}
                                                    <div class="activate-form-button">
                                                        <button type="submit" class="btn {{$page->active ? 'btn-success' : 'btn-warning'}} btn-xs">{!! $page->active() !!}</button>
                                                    </div>

                                                    {!! Form::close() !!}
                                                    <!--
                                                    {!! Form::model($page->id, ['action'=>['admin\ContentController@promote', $page->id], 'class'=>'promove-form' ]) !!}
                                                    {{method_field('PATCH')}}

                                                    {!! Form::hidden('active', null) !!}
                                                    <div class="promove-form-button">
                                                        <button type="submit" class="btn {{$page->promoted ? 'btn-success' : 'btn-warning'}} btn-xs">{!! $page->promoted() !!}</button>
                                                    </div>

                                                    {!! Form::close() !!}
                                                    -->
                                                </td>

                                                <td>
                                                    <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                                                    <div class="row">
                                                         <div class="col-xs-3">
                                                            <a href="{{url('/')}}/sgc/content/{{strtolower($main_page->slug)}}/{{$page->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                                         </div>
                                                        <div class="col-xs-3">
                                                            @if($main_page->form != '_call_to_actions' &&  $main_page->form != '_general_contacts')
                                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$page->id}}"><i class="fa fa-trash"></i> Eliminar </button>
                                                            @endif
                                                        </div>

                                                        <div class="modal fade bs-example-modal-sm" id="delete{{$page->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                                        <form style='display: inline-block'  action="{{url('/')}}/sgc/content/{{strtolower($main_page->slug)}}/{{$page->id}}" method="post">
                                                                            {{csrf_field()}}
                                                                            {{method_field('DELETE')}}
                                                                            <button  type="submit" class="btn btn-danger">Eliminar</button>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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
                    url: '{{url('/')}}/sgc/priority'
                });
            }
        });
        $( "#sortable" ).disableSelection();

    } );


    function activate(class_activate) {

        $(class_activate).each(function () {
            var $form = $(this);

            $form.on('submit', function (e) {
                e.preventDefault();

                var data = $(this).serialize();
                var dom = $(this).find(class_activate + '-button');

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: data,
                    success: function (data) {
                        dom.html(data);
                        //activate(class_activate);
                    }
                });
            });
        });
    }

    activate('.activate-form');
    activate('.promove-form')


</script>
@endpush