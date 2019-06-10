<h4>Filter</h4>

<div class="row">
    <div class="col l4">

    </div>
</div>

<form action="{{ url('products/filter') }}" method="GET">
    @csrf
    <div class="input-field">
        <select name="category" id="catID">
            {{-- <option class="option" value="" disabled selected>Choose your category</option> --}}
            <option class="option" value="All" selected>All</option>
            <option class="option" value="Mobility">Mobility</option>
            <option class="option" value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
            <option class="option" value="Visual Impairment (VI)">Visual Impairment (VI)</option>
        </select>
        <label for="catID">Category</label>
    </div>
    <div class="input-field">
        <select name="price" id="priceID">
            {{-- <option class="option" value="" disabled selected>Choose your price range</option> --}}
            <option class="option" value="Unlimited" selected>Unlimited</option>
            <option class="option" value="100">0 - 100</option>
            <option class="option" value="200">100 - 200</option>
            <option class="option" value="300">200 - 300</option>
            <option class="option" value="400">300 - 400</option>
            <option class="option" value="500">400 - 500</option>
        </select>
        <label for="priceID">Price Range</label>
    </div>

    <button id="findBtn" type="submit" class="btn-small blue">
        Filter
        <i class="material-icons left">search</i>
    </button>
</form>
