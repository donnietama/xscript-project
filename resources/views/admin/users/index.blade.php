@extends('admin.templates.master')
@section('content')
<div class="wrapper ">
    @include('admin.templates.layouts.users-sidebar')
    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Registered Users</h4>
                  <p class="card-category">Users found: {{ $count }}</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Register By
                        </th>
                        <th class="text-center">
                          Actions
                        </th>
                      </thead>
                      <tbody>
                        @foreach ($data as $user)
                        <tr>
                          <td>
                            {{ $user->id }}
                          </td>
                          <td>
                            {{ $user->name }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                            {{ $user->provider }}
                          </td>
                          <td class="td-actions text-center">
                            <button type="button" rel="tooltip" class="btn btn-info btn-round">
                              <i class="material-icons">person</i>
                            </button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            {{ $data->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection