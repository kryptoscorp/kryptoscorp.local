<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Kryptos
            @show
        </title>
        <meta charset="utf-8"></meta>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
        <meta content="width=device-width, initial-scale=1" name="viewport"></meta>
        <meta content="" name="website kryptos"></meta>
        <meta content="" name="Ronny Arvelo"></meta>

        <!-- CSS are placed here -->
        {{ HTML::style('css/jquery-ui.css') }}
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/font-awesome.css') }}



        <!-- otra forma de importar
        {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
        {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css') }}-->

        
    </head>

    <body style="margin-top:20px">

    <div class="container">
        <!--nav-->
    <div class="row">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../">
                        <i class="fa fa-home"> Kryptos</i>
                    </a>
                    <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->


                <div id="navbar-main" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav" >
                        @if(URL::current()==URL::route('nosotros'))
                            <li class="active">
                        @else
                            <li>
                        @endif
                            <a href="{{{ URL::action('KryptosController@showNosotros') }}}">Nosotros</a>
                            </li>
                        @if(URL::current()==URL::route('servicios'))
                            <li class="active">
                        @else
                            <li>
                        @endif
                            <a href="{{{ URL::action('KryptosController@showServicios') }}}">Servicios</a>
                            </li>
                        @if(URL::current()==URL::route('ventas'))
                            <li class="active">
                        @else
                            <li>
                        @endif
                            <a href="{{{ URL::action('KryptosController@showVentas') }}}">Ventas</a>
                            </li>
                        @if(URL::current()==URL::route('contacto'))
                            <li class="active">
                        @else
                            <li>
                        @endif
                            <a href="{{{ URL::action('KryptosController@showContacto') }}}">Contacto</a>
                            </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>

        <!--content-->         
        <div id="main" class="container-fluid">
            {{ HTML::ul($errors->all()) }}
            @if (Session::has('message'))
                <div class="alert alert-dismissable alert-info">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ Session::get('message') }}
                </div>
            @endif
            @yield('content')
        </div>
        <br>
        <!--end content -->
        <div class="row">             
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <ul style="margin-right: 20px"
                    class="nav navbar-nav navbar-right" >
                    @if (Auth::guest())
                        <li>{{ HTML::link('login','Intranet') }}</li>
                    @else
                        <li>{{ HTML::link('backend','Administración') }}</li>
                        <li>{{ HTML::link('logout','Logout') }}</li>       
                    @endif
                    </ul>
                </div>
            </nav>
        </div>

        <!--footer-->
        <div>        
            <footer id="footer" class="row">
                <p class="text-center text-success">
                Corporacion Kryptos 2014
                </p>
            </footer>
        </div>
    </div>

    <!-- Scripts are placed here -->
        {{ HTML::script('/js/jquery-2.1.1.js') }}
        {{ HTML::script('/js/bootstrap.js') }}
        {{ HTML::script('/js/jquery-ui.js') }}
        <script type="text/javascript">
            $(function () {
            $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            weekHeader: 'Sm',
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
            };
            $.datepicker.setDefaults( $.datepicker.regional['es']);
            $(".calendar").datepicker({
            firstDay: 1,
            dateFormat: 'yy-mm-dd'
            });
            });
            $(document).ready(function(){
                $(window).load(function(){
                $('.make-visible').css('visibility','visible').hide().fadeIn(2000);
                });
                $('.slide-right').animate({
                    left: '50px'
                }, 1000);
            });
        </script>
    </body>
</html>

