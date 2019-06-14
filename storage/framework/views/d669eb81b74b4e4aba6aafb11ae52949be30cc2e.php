<?php $__env->startSection('content'); ?>

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Reports</span>

              <?php if(count($reports)): ?>

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>#</th>
                          <th>Report</th>
                          <th>Reported Since</th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>
                        <td><?php echo e(++$key); ?></td>
                        <td><a href="<?php echo e(route('reports.show', $report->id)); ?>"><?php echo e($report->reason); ?></a></td>

                        <td>
                            <?php echo e($report->created_at->diffForHumans()); ?>

                        </td>

                        <td>
                            <form action="<?php echo e(route('reports.destroy', $report->id)); ?>" method="POST">
                                <?php echo method_field("DELETE"); ?>
                                <?php echo csrf_field(); ?>

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
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                  </table>

                <?php else: ?>
                        <p class="section">No Reports Listed.</p>
                <?php endif; ?>

            </div>
        </div>

          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/reports/index.blade.php ENDPATH**/ ?>