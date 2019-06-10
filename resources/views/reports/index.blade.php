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

                                <button type="submit" class="btn red darken-2">
                                        <span>Delete</span>
                                        <i class="material-icons left">delete</i>
                                </button>
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
