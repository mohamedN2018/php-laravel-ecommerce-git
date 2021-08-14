{{--<head>--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<!-- Coded with love by Mutiullah Samim-->--}}
{{--<div class="container">--}}
{{--    <div class="d-flex justify-content-center ">--}}
{{--        <div class="searchbar">--}}
{{--            <input class="search_input" type="text" name="" placeholder="Search...">--}}
{{--            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



{{--        =============================            nav-2  - style         ========================--}}


{{--<style>--}}
{{--    .searchbar{--}}
{{--        margin-bottom: auto;--}}
{{--        margin-top: auto;--}}
{{--        height: 60px;--}}
{{--        background-color: #a0a4c7;--}}
{{--        border-radius: 30px;--}}
{{--        padding: 10px;--}}
{{--    }--}}

{{--    .search_input{--}}
{{--        color: white;--}}
{{--        border: 0;--}}
{{--        outline: 0;--}}
{{--        background: none;--}}
{{--        width: 0;--}}
{{--        caret-color:transparent;--}}
{{--        line-height: 40px;--}}
{{--        transition: width 0.4s linear;--}}
{{--    }--}}

{{--    .searchbar:hover > .search_input{--}}
{{--        padding: 0 10px;--}}
{{--        width: 200px;--}}
{{--        caret-color:red;--}}
{{--        transition: width 0.4s linear;--}}
{{--    }--}}

{{--    .searchbar:hover > .search_icon{--}}
{{--        background: white;--}}
{{--        color: #e74c3c;--}}
{{--    }--}}

{{--    .search_icon{--}}
{{--        height: 40px;--}}
{{--        width: 40px;--}}
{{--        float: right;--}}
{{--        display: flex;--}}
{{--        justify-content: center;--}}
{{--        align-items: center;--}}
{{--        border-radius: 50%;--}}
{{--        color:white;--}}
{{--        text-decoration:none;--}}
{{--    }--}}
{{--</style>--}}







<div class="col-md-5">

    <form class="">

        <div class="input-group input-group-lg mb-3" id="search-box">
            <input type="text" class="form-control default-font-size" placeholder="Search product" aria-label="Search product">

            <select class="custom-select input-group-append form-control-lg no-border-x default-font-size">
                <option selected="">All categories</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="la la-search"></i></button>
            </div>
        </div>
    </form>

</div>



<script>
    const searchFocus = document.getElementById('search-focus');
    const keys = [
        { keyCode: 'AltLeft', isTriggered: false },
        { keyCode: 'ControlLeft', isTriggered: false },
    ];

    window.addEventListener('keydown', (e) => {
        keys.forEach((obj) => {
            if (obj.keyCode === e.code) {
                obj.isTriggered = true;
            }
        });

        const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

        if (shortcutTriggered) {
            searchFocus.focus();
        }
    });

    window.addEventListener('keyup', (e) => {
        keys.forEach((obj) => {
            if (obj.keyCode === e.code) {
                obj.isTriggered = false;
            }
        });
    });
</script>
{{--        =============================             nav-2  - style  end         ========================--}}
