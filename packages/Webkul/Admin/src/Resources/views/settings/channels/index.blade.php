@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.settings.channels.title') }}
@stop

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('admin::app.settings.channels.title') }}</h1>
            </div>

    
        </div>

        <div class="page-content">
            @inject('channels','Webkul\Admin\DataGrids\ChannelDataGrid')
            {!! $channels->render() !!}
        </div>
    </div>
@stop