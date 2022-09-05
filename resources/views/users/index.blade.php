@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Users') }}</div>
          <table class="table-hover table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">@sortablelink('personal_number', __('Personal Number'), ['filter' => 'active, visible'], ['class' => 'text-decoration-none text-uppercase text-muted'])</th>
                <th scope="col">@sortablelink('title', __('Title'), ['filter' => 'active, visible'], ['class' => 'text-decoration-none text-uppercase text-muted'])</th>
                <th scope="col">@sortablelink('last_name', __('Last Name'), ['filter' => 'active, visible'], ['class' => 'text-decoration-none text-uppercase text-muted'])</th>
                <th scope="col">@sortablelink('first_name', __('First Name'), ['filter' => 'active, visible'], ['class' => 'text-decoration-none text-uppercase text-muted'])</th>
                <th scope="col">@sortablelink('created_at', __('Created At'), ['filter' => 'active, visible'], ['class' => 'text-decoration-none text-uppercase text-muted'])</th>
                <th scope="col">@sortablelink('updated_at', __('Updated At'), ['filter' => 'active, visible'], ['class' => 'text-decoration-none text-uppercase text-muted'])</th>
              </tr>
            </thead>
            <div class="card-body">
              @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <!-- List group -->

              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td width="5%">{{ $user->id }}</td>
                    <th width="10%" scope="row">{{ $user->personal_number }}</th>
                    <td width="5%">{{ $user->title }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td width="8%">{{ date('d. m. Y', strtotime($user->created_at)) }}</td>
                    <td width="8%">{{ date('d. m. Y', strtotime($user->updated_at)) }}</td>
                  </tr>
                @endforeach
              </tbody>
          </table>
          {!! $users->appends(\Request::except('page'))->render() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
