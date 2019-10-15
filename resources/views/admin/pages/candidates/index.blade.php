@extends('admin.layouts.layout')


@section('content')
    @component(
        'admin.components.records-list',
        [
            'records' => $candidates,
            'columns' => [
                '#' => 'id',
                'Nome' => 'name',
                'Localidade' => 'address',
                'Criado em' => 'created_at'
            ],
            'actions' => [
              
                'edit' => 'admin\CandidatesController@show',
                'destroy' => 'admin\CandidatesController@destroy'
            ]
        ]
    )
    @endcomponent
@endsection
