<form action="<?php echo e(url('products/filter')); ?>" method="GET">
<nav>
    <div class="nav-wrapper grey lighten-5 black-text">
        <div class="input-field">
            <input id="search" type="search" placeholder="Search" name="search" value="<?php echo e($search ?? ""); ?>">
            <label class="label-icon" for="search"><i class="material-icons grey-text">search</i></label>
            <i class="material-icons">close</i>
        </div>
    </div>
</nav>
<ul class="collapsible expandable" style="margin-top: 0px">


    <li>
        <div class="collapsible-header grey lighten-5"><i class="material-icons">filter_list</i>Filter</div>
        <div class="collapsible-body" style="padding-bottom:0 !important;">
            <div class="row" style="margin:0;">
                <div class="col l6">
                    <div class="input-field">
                        <select name="category" id="catID">
                            <option class="option" value="All" selected>All</option>
                            <option class="option" value="Mobility">Mobility</option>
                            <option class="option" value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                            <option class="option" value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                        </select>
                        <label for="catID">Category</label>
                    </div>
                </div>
                <div class="col l6">
                    <div class="row">
                        <div class="col l4">
                            <div class="input-field">
                                <input type="number" name="min" id="min" value="<?php echo e($min ?? ""); ?>">
                                <label for="min">Minimum Price</label>
                            </div>
                        </div>
                        <div class="col l5">
                            <div class="input-field">
                                <input type="number" name="max" id="max" value="<?php echo e($max ?? ""); ?>">
                                <label for="max">Maximum Price</label>
                            </div>
                        </div>
                        <div class="col l3">
                            <button id="findBtn" type="submit" class="btn-small orange">
                                Filter
                                <i class="material-icons left">filter_list</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </li>


</ul>
</form>






<?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/inc/filter.blade.php ENDPATH**/ ?>