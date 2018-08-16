@extends('admin.templates.master')
@section('content')
    
  <div class="wrapper ">

      @include('admin.templates.layouts.articles-sidebar')
  
      <div class="main-panel">
        @include('admin.templates.layouts.navbar')
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title ">Articles List</h4>
                    <p class="card-category">Articles found: {{ $articleCounts }}</p>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>
                            ID
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Category
                          </th>
                          <th class="text-center">
                            Actions
                          </th>
                        </thead>
                        <tbody>
                          @foreach ($articles as $article)
                          <tr>
                            <td>
                              {{ $article->id }}
                            </td>
                            <td>
                              {{ $article->title }}
                            </td>
                            <td>
                              {{ $article->published ? 'Published' : 'Draft' }}
                            </td>
                            <td>
                              {{ $article->categories->first()->name }}
                            </td>
                            <td class="td-actions text-center">
                                <a href={{ url('admin/articles/'.$article->id) }} rel="tooltip" class="btn btn-info btn-round">
                                    <i class="material-icons">open_in_new</i>
                                </a>
                                <button rel="tooltip" class="btn btn-success btn-round">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button rel="tooltip" class="btn btn-danger btn-round">
                                    <i class="material-icons">close</i>
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
              {{ $articles->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection