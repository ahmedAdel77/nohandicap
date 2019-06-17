<form action="{{ url('products/filter') }}" method="GET">
<nav>
    <div class="nav-wrapper grey lighten-5 black-text">
        <div class="input-field">
            <input id="search" type="search" placeholder="Search" name="search" value="{{ $search ?? "" }}">
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
                            <option value="Artificial Limbs" value="Artificial Limbs">Artificial Limbs</option>
                            <option class="option" value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                        </select>
                        <label for="catID">Category</label>
                    </div>
                </div>
                <div class="col l6">
                    <div class="row">
                        <div class="col l4">
                            <div class="input-field">
                                <input type="number" name="min" id="min" value="{{ $min ?? "" }}">
                                <label for="min">Minimum Price</label>
                            </div>
                        </div>
                        <div class="col l5">
                            <div class="input-field">
                                <input type="number" name="max" id="max" value="{{ $max ?? "" }}">
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



{{-- <ul id="slide-out" class="sidenav sidenav-fixed center blue-grey wrapper">
    <li>
        <nav>
            <div class="nav-wrapper grey lighten-5 black-text">
                <form action="{{ url('products/search') }}" method="GET">
                @csrf
                <div class="input-field">
                    <input id="search" type="search" placeholder="Search" name="name"  required>
                    <label class="label-icon" for="search"><i class="material-icons grey-text">search</i></label>
                    <i class="material-icons">close</i>
                </div>
                </form>
            </div>
        </nav>
    </li>

    <li>
        <ul class="center" style="margin-top: 0px">
            <li>
                <div class="-header grey lighten-5"><i class="material-icons">filter_list</i>Filter</div>
                <div class="center">
                        <form action="{{ url('products/filter') }}" method="GET">
                            @csrf
                            <div style="width: fit-content; padding: 10px;">
                                <div class="input-field" style="width: fit-content; padding: 10px;">
                                    <select name="category" id="catID">
                                        <option class="option" value="All" selected>All</option>
                                        <option class="option" value="Mobility">Mobility</option>
                                        <option class="option" value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                                        <option class="option" value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                                    </select>
                                    <label for="catID">Category</label>
                                </div>
                            </div>

                            <div style="width: fit-content; padding: 10px;margin-top: -50px;margin-bottom: -30px">
                                <div class="input-field" style="width: fit-content; padding: 10px;">
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

                            <div class="row center">
                                <button id="findBtn" type="submit" class="btn-small orange">
                                    Filter
                                    <i class="material-icons left">filter_list</i>
                                </button>
                            </div>
                        </form>
                </div>
            </li>
        </ul>
    </li>
</ul> --}}

{{-- <div class="blue-grey lighten-4 filterpanel">
    <ul>
        <li>
            <nav class="white" style=" border-radius: 50px;">
                <div class="nav-wrapper">
                    <form action="{{ url('products/search') }}" method="GET">
                    @csrf
                    <div class="input-field white" style="border-radius: 50px; width:fit-content; ">
                        <input id="search" type="search" placeholder="Search" name="name"  required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                    </form>
                </div>
            </nav>

        <li>
            <ul class="center" style="margin-top: 10px">
                <li>
                    <div class="center">
                            <form action="{{ url('products/filter') }}" method="GET">
                                @csrf
                                <div style="width: fit-content; padding: 10px;">
                                    <div class="input-field" style="width: fit-content; padding: 10px;">
                                        <select name="category" id="catID">
                                            <option class="option" value="All" selected>All</option>
                                            <option class="option" value="Mobility">Mobility</option>
                                            <option class="option" value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                                            <option class="option" value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                                        </select>
                                        <label for="catID">Category</label>
                                    </div>
                                </div>

                                <div style="width: fit-content; padding: 10px;margin-top: -50px;margin-bottom: -30px">
                                    <div class="input-field" style="width: fit-content; padding: 10px;">
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

                                <div class="row center">
                                    <button id="findBtn" type="submit" class="btn-small orange">
                                        Filter
                                        <i class="material-icons left">filter_list</i>
                                    </button>
                                </div>
                            </form>
                    </div>
                </li>
            </ul>
        </li>
    </ul>

</div> --}}
