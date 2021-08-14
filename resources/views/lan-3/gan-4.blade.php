<link href="assets/css/style.css" rel="stylesheet">
<link href="css/cell3.css" rel="stylesheet">


<div class="sidebar">
    <br>
    <a href="{{ route('home') }}"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
    <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
    <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>


    <br><br>
    <h4 class="text-center"> قسم </h4>
    <div class="row50">

        <div class="checkbox">
            <a>
                <input class="u-lan" type="checkbox" value="">
                <span class="">phone</span>
                <span class="row49">(10)</span>
            </a>
        </div>
        <div class="checkbox">
            <a>
                <input class="u-lan" type="checkbox" value="">
                <span class="">Screens</span>
                <span class="row49">(5)</span>
            </a>
        </div>
        <div class="checkbox">
            <a>
                <input class="u-lan" type="checkbox" value="">
                <span class="">laptop</span>
                <span class="row49">(6)</span>
            </a>
        </div>

    </div>


    <br><br>
    <h4 class="text-center"> العلامة التجارية </h4>

    <div class="row50">

        <div class="checkbox">
            <a>
                <input class="u-lan" type="checkbox" value="">
                <span class="">samsung</span>
                <span class="row49">(10)</span>
            </a>
        </div>
        <div class="checkbox">
            <a>
                <input class="u-lan" type="checkbox" value="">
                <span class="">xiaomi</span>
                <span class="row49">(5)</span>
            </a>
        </div>
        <div class="checkbox">
            <a>
                <input class="u-lan" type="checkbox" value="">
                <span class="">apple</span>
                <span class="row49">(6)</span>
            </a>
        </div>

    </div>

</div>

<style>
    body {
        background-image: linear-gradient(45deg, #203d4e, #ececec);
    }
    .container {
        max-width: 1645px;
        margin-left: 360px;
    }
    .sidebar {
        height: 100%;
        width: 245px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #e4e4e4;
        overflow-x: hidden;
        padding-top: 16px;
    }

    .sidebar a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }
    .u-section-1 .u-text-2 {
        margin: 20px 0 20px;
        font-size: 2rem;
        color: #940029;
    }

    .u-section-1 .u-btn-1 {
        font-weight: 700;
        margin: 23px auto -17px;
        padding: 10px 60px 10px 58px;
        background-image: linear-gradient(to right, #3b065e, #5d3be7);
        border-style: none;
    }

    .u-section-1 .u-btn-1 {
        font-weight: 700;
        margin: 23px auto -17px;
        padding: 10px 60px 10px 58px;
        background-image: linear-gradient(to right, #3b065e, #5d3be7);
        border-style: none;
    }

    label {
        display: inline-block;
        margin-bottom: 1.0rem;
    }
    .row50 {
        margin-left: 15px;
    }
    .u-lan {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        margin: 15px 7px 9px 5px;
    }
    .row49 {
        margin: 12px 2px 16px -1px;

    }

</style>
