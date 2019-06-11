<ul class="collapsible" style="margin-top: 0px">
    <li>
        <div class="collapsible-header grey lighten-5"><i class="material-icons">filter_list</i>Filter</div>
        <div class="row collapsible-body">
                <form action="<?php echo e(url('products/filter')); ?>" method="GET">
                    <?php echo csrf_field(); ?>
                    <div class="col l5">
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

                    <div class="col l5">
                        <div class="input-field">
                            <select name="price" id="priceID">
                                
                                <option class="option" value="Unlimited" selected>Unlimited</option>
                                <option class="option" value="100">0 - 100</option>
                                <option class="option" value="200">100 - 200</option>
                                <option class="option" value="300">200 - 300</option>
                                <option class="option" value="400">300 - 400</option>
                                <option class="option" value="500">400 - 500</option>
                            </select>
                            <label for="priceID">Price Range</label>
                        </div>
                    </div>

                    <div class="col l2">
                        <button id="findBtn" type="submit" class="btn-small orange">
                            Filter
                            <i class="material-icons left">filter_list</i>
                        </button>
                    </div>

                </form>
        </div>
    </li>
    <li >
        <div class="collapsible-header grey lighten-5"><i class="material-icons">search</i>Search</div>
        <div class="row collapsible-body">
            <form action="<?php echo e(url('products/search')); ?>" method="GET">
            <?php echo csrf_field(); ?>
                <div class="col l10">
                        <div class="input-field">
                            <input type="text" id="name" name="name" required>
                            <label for="name">Looking for...</label>
                        </div>
                    </div>
                <div class="col l2">
                    <button id="findBtn" type="submit" class="btn-small orange">
                        Search
                        <i class="material-icons left">search</i>
                    </button>
                </div>
            </form>

        </div>
    </li>
</ul>
<?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/inc/filter.blade.php ENDPATH**/ ?>