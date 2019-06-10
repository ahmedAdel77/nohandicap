<?php $__env->startSection('content'); ?>

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Users</span>


              <?php if(count($users)): ?>

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
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($user->isAdmin == 0): ?>

                                <tr>
                                    <td><?php echo e(++$key); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td>
                                        <?php if($user->isAdmin == 0): ?>
                                            User
                                        <?php else: ?>
                                            Admin
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($user->isBanned): ?>
                                            Banned
                                        <?php else: ?>
                                            Not Banned
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <button onclick="document.getElementById('banUserForm<?php echo e($user->id); ?>').submit();" name="isBanned">ban</button>

                                        <form id="banUserForm<?php echo e($user->id); ?>" action="<?php echo e(url('users/'.$user->id.'/ban')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                          <!-- Switch -->
                                        <div class="switch section">
                                            <label>
                                                Unban
                                                <input type="checkbox" onclick="document.getElementById('banUserForm<?php echo e($user->id); ?>').submit();" name="isBanned">
                                                <span class="lever"></span>
                                                Ban
                                            </label>
                                        </div>
                                    </td>

                                </tr>

                            <?php endif; ?>

                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                  </table>

                <?php else: ?>
                    <p class="section">No Users Listed.</p>
                <?php endif; ?>

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/users/index.blade.php ENDPATH**/ ?>