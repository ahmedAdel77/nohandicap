<h4>Filter</h4>



<ol>



    <form action="" method="POST">
            <?php echo csrf_field(); ?>
        <div class="input-field">
            <select name="category" id="">
                <option value="" disabled selected>Choose your category</option>
                <option value="Mobility">Mobility</option>
                <option value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                <option value="Visual Impairment (VI)">Visual Impairment (VI)</option>
            </select>
            <label for="">Category</label>
        </div>
        <button type="submit" class="btn-small">Filter</button>

</ol>
<?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/inc/filter.blade.php ENDPATH**/ ?>