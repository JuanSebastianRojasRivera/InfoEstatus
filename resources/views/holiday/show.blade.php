@extends('layouts.app')

@section('template_title')
    {{ $holiday->name ?? "{{ __('Show') Holiday" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Holiday</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('holidays.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Year:</strong>
                            {{ $holiday->year }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $holiday->date }}
                        </div>
                        <div class="form-group">
                            <strong>Detail:</strong>
                            {{ $holiday->detail }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
