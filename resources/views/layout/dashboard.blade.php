<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('tittle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/components.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
            
    <style>
        .card-header {
            color: seashell !important;
            padding: 20px;

        }

        .containerD {
            display: flex;

            justify-content: center;
        }

        .button {
            margin: 20px;
        }

        .mid {
            color: white;
            text-align: center;
        }

        .fl {
            position: relative;
        }

        lable {
            color: white;
        }

        .spane{
            width: 1580px;
            height: 150px;
        }

    </style>
</head>

<body style="background: black;">
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="{{ route('page.index') }}"
                            class="btn btn-warning btn-lg btn-block btn-icon-split"><img
                                style="width: 100px; height: 100px;" src="{{ asset('assets') }}/img/logofull.png"></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{ route('page.index') }}" class="text-light bg-warning"><img
                                style="width: 50px; height: 50px;" src="{{ asset('assets') }}/img/logofull.png"></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header text-center">
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="/page" class="nav-link">
                                <i class="fas fa-clock"></i><span>List Parkiran</span></a>
                        </li>


                        <li class="menu-header">Pages</li>
                        <li>
                            
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li> <a href="{{ route('logout') }}" class="btn btn-danger"><span
                                    style="padding: 25px;"><i class=" fa fa-sign-out-alt" >Logout</span></a></li>



                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">

                <section class="section">
                    {{-- start widget --}}
                    <div class="spane">

                        <div style="float-right" class="card  bg-warning text-dark">
                            <table class=" text-center ">

                                <tr>
                                    <thead>
                                        <th><h5><b>
                                            @php
                                            echo date("j F Y",time())
                                            @endphp
                                            </b>
                                            </h5>
                                            {{-- <iframe
                                                src="https://free.timeanddate.com/clock/i7v8cxgd/n250/tlid38/fn17/fs18/fc343a40/tcffc107/pcffc107/ftb/pl12/pr12/pt16/pb0/tt1/tw0/td2"
                                                frameborder="0" width="187" height="37"></iframe> --}}

                                        </th>
                                    </thead>
                                    <td>
                                        <h3>
                                            <a><span class="text-dark badge hours"></span></a> :
                                            <a><span class="text-dark badge min"></span></a> :
                                            <a><span class="text-dark badge sec"></span></a>
                                        </h3>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    {{-- end widget --}}

                    {{-- index --}}
                    @yield('content')
                </section>

            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div> ATM with luv By <a
                        href="https://www.facebook.com/egi.laido">Dicky Wahyudi Pratama</a>
                </div>
                <div class="footer-right">
                    Stisla ver 2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('assets') }}/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ asset('assets') }}/js/scripts.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>

    <!-- Clock -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                var hours = new Date().getHours();
                $(".hours").html((hours < 10 ? "0" : "") + hours);
            }, 1000);
            setInterval(function() {
                var minutes = new Date().getMinutes();
                $(".min").html((minutes < 10 ? "0" : "") + minutes);
            }, 1000);
            setInterval(function() {
                var seconds = new Date().getSeconds();
                $(".sec").html((seconds < 10 ? "0" : "") + seconds);
            }, 1000);
        });
    </script>



</body>

</html>
