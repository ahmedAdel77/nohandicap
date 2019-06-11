@extends('layouts.app')

@section('content')

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Users</span>


              @if (count($users))

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Is Ban?</th>
                          <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $key => $user)
                            @if ($user->isAdmin == 0)

                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->isAdmin == 0)
                                            User
                                        @else
                                            Admin
                                        @endif
                                    </td>
                                    <td>
                                        @if ($user->isBanned)
                                            Banned
                                        @else
                                            Not Banned
                                        @endif
                                    </td>
                                    <td>
                                        {{-- <button onclick="document.getElementById('banUserForm{{ $user->id }}').submit();" name="isBanned">ban</button> --}}

                                        <!-- Switch -->
                                        <form id="banUserForm{{ $user->id }}" action="{{ url('users/'.$user->id.'/ban') }}" method="POST">
                                            @csrf
                                            <div class="switch section">
                                                <label>
                                                    Unban
                                                <input {{ $user->isBanned ? "checked" : null }} type="checkbox" onclick="document.getElementById('banUserForm{{ $user->id }}').submit();" name="isBanned">
                                                <span class="lever"></span>
                                                    Ban
                                                </label>
                                            </div>
                                        </form>
                                    </td>

                                </tr>

                            @endif

                         @endforeach

                    </tbody>
                  </table>

                @else
                    <p class="section">No Users Listed.</p>
                @endif

            </div>
        </div>

          </div>
        </div>
      </div>

      <script type="text/javascript">
        $("body").on("click",".ban",function(){


          var current_object = $(this);


          bootbox.dialog({
          message: "<form class='form-inline add-to-ban' method='POST'><div class='form-group'><textarea class='form-control reason' rows='4' style='width:500px' placeholder='Add Reason for Ban this user.'></textarea></div></form>",
          title: "Add To Black List",
          buttons: {
            success: {
              label: "Submit",
              className: "btn-success",
              callback: function() {
                    var baninfo = $('.reason').val();
                    var token = $("input[name='_token']").val();
                    var action = current_object.attr('data-action');
                    var id = current_object.attr('data-id');


                    if(baninfo == ''){
                        $('.reason').css('border-color','red');
                        return false;
                    }else{
                        $('.add-to-ban').attr('action',action);
                        $('.add-to-ban').append('<input name="_token" type="hidden" value="'+ token +'">')
                        $('.add-to-ban').append('<input name="id" type="hidden" value="'+ id +'">')
                        $('.add-to-ban').append('<input name="baninfo" type="hidden" value="'+ baninfo +'">')
                        $('.add-to-ban').submit();
                    }


              }
            },
            danger: {
              label: "Cancel",
              className: "btn-danger",
              callback: function() {
                // remove
              }
            },
          }
        });
    });
    </script>

@endsection
