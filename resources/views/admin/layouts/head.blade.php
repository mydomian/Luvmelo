<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{settings()->name}}</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('/storage/admin/assets/main.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/logo')}}/{{settings()->favicon}}">

@stack('admin-css')
<style>
    .home-first-section-second-row {
        margin-left: -5% !important;
    }

    .custom-height-scroller1 {
        height: 500px;
        overflow: auto;
    }

    .new-class-margin1 {
        margin: 0px 3px 0px -4px;
    }

    .client-middle-section {
        margin-left: -4%;
    }

    .search-section-custom2 {
        width: 75%;
        border: 1px solid #ccc;
        border-radius: 25px;
        padding: 10px;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        margin: 0 auto;
    }

    .search-section-custom2 img {
        width: 20px;
        margin: 0 15px;
        border-radius: 50%;
    }

    .search-section-custom2 input {
        flex: 1;
        border: none;
        outline: none;
        font-size: 16px;
    }


    @media screen and (max-width: 600px) {
        .new-class-margin1 {
            margin: 0px 0px 0px 0px;
        }

    }
</style>
