@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <h4> {{ __('coreuiforms.notes.create_note') }} </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('notes.store') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col">
                                    <label>{{ __('coreuiforms.notes.title') }}</label>
                                    <input class="form-control" type="text" placeholder="{{ __('coreuiforms.notes.title') }}" name="title" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                              <div class="col">
                                <label>{{ __('coreuiforms.notes.content') }}</label>
                                <textarea class="form-control" id="textarea-input" name="content" rows="9" placeholder="{{ __('coreuiforms.notes.content') }}" required></textarea>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col">
                                <label>{{ __('coreuiforms.notes.applies_to_date') }}</label>
                                <input type="date" class="form-control" name="applies_to_date" required/>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col">
                                <label>{{ __('coreuiforms.notes.status') }}</label>
                                <select class="form-control" name="status_id">
                                    @foreach($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col">
                                <label>{{ __('coreuiforms.notes.note_type') }}</label>
                                <input class="form-control" type="text" placeholder="{{ __('coreuiforms.notes.note_type') }}" name="note_type" required>
                              </div>
                            </div>
 
                            <button class="btn btn-success" type="submit">{{ __('coreuiforms.save') }}</button>
                            <a href="{{ route('notes.index') }}" class="btn btn-primary">{{ __('coreuiforms.return') }}</a> 
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection