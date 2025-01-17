<!doctype html>
<html lang="fa">
<head dir="rtl">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کارماران</title>
    <link rel="stylesheet" href="/newthem/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="/newthem/css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="/newthem/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @yield('style')

</head>
<body>

@include('client.layout.nav')


@yield('content')




<script src="/newthem/js/jquery-3.6.1.js"></script>
<script src="/newthem/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="/newthem/js/easy-number-separator.js"></script>



<script>
    $('.price').each(function(i, obj) {
        var numb = obj.innerHTML.match(/\d/g);
        numb = numb.join("");
        obj.innerHTML=parseInt(numb).toLocaleString('fa-IR')
    });
</script>

@yield('script')



</body>
</html>
