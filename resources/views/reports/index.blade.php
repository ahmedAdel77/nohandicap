@extends('layouts.app')

@section('content')

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Reports</span>


              @if (count($reports))

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>#</th>
                          <th>Report</th>
                          <th></th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            @foreach ($reports as $key => $report)

                      <tr>
                        <td>{{ ++$key }}</td>
                        <td><a href="{{ route('reports.show', $report->id) }}">{{ $report->reason }}</a>

                        </td>
                        <td>

                        </td>
                        <td>
                            <form action="{{ route('reports.destroy', $report->id) }}" method="POST">
                                @method("DELETE")
                                @csrf

                                <a class="waves-effect waves-red red darken-2 btn modal-trigger" href="#modal1">
                                    <span>Delete</span>
                                    <i class="material-icons left">delete</i>
                                </a>

                                <!-- Modal Structure -->
                                <div id="modal1" class="modal">
                                  <div class="modal-content">
                                    <h5>Are you sure you want to delete this item ? </h5>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="modal-close btn red darken-2 waves-effect">
                                            <span>Yes, delete it</span>
                                    </button>
                                  </div>
                                </div>
                            </form>

                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>

                @else
                        <p class="section">No Reports Listed.</p>
                @endif

            </div>
        </div>

          </div>
        </div>
      </div>

@endsection
