<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <form action ="/rutaControlCrud" method = "post">
                    @csrf
                    <input  id ="txt1" name = "txt1" type="text" class="">
                    <input  id ="txt2" name ="txt2" type="text" class="text">
                    <input id ="txt3" name = "txt3" type="text" class="text">
                    <input type = "submit" class ="btn btn-primary" value ="enviar">
                </form>

                    <p></p>

                <table width="70%" class ="table-dark">
                    <thead>
                    <tr>id</tr>
                    <tr>campo1</tr>
                    <tr>campo2</tr>
                    <tr>campo3</tr>
                    <tr>acciones</tr>
                    </thead>
                    <tbody>
                    @if(!isset($trainers))
                        $trainers = '';
                    @endif

                    @foreach($trainers as $valor)
                        <tr>
                        <td>{{$valor->id}}</td>
                        <td>{{$valor->campo1}}</td>
                        <td>{{$valor->campo2}}</td>
                        <td>{{$valor->campo3}}</td>
                        <td >
                            <form action ="/rutaControlCrud/{{$valor->id}}" method ="post">
                                @csrf
                                @method('PUT')
                                <input  id ="txt4" name = "txt4" type="text" class="text" value ="{{$valor->campo1}}">
                                <input  id ="txt5" name ="txt5" type="text" class="text"  value ="{{$valor->campo2}}">
                                <input id ="txt6" name = "txt6" type="text" class="text"  value ="{{$valor->campo3}}">


                                <input type="submit" value = "actualizar">

                            </form>
{{--                            <button data-toggle="modal" data-target="#modalAddProvee" data-whatever="@mdo">update</button>--}}



                            <form action ="/rutaControlCrud/{{$valor->id}}" method ="post">
                                @csrf
                                @method('DELETE')
                                <input type = "submit"  value ="delete">
                            </form>
                        </td>
                        </tr>




                    @endforeach

                    </tbody>
                </table>


            </div>
        </div>



    <script type="text/javascript" src = "{{asset('js/app.js')}}"> </script>
    </body>
</html>

<div class="modal fade" id="modalAddProvee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar campo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formProv"  method="get" accept-charset="utf-8" class="form-horizontal">
                <div class="modal-body">




                    <div class ="form-group row">

                        <label for="txt4" class="col-3 col-form-label">campo1</label>
                        <div class="col-8">
                            <input type="text" class="form-control input-sm" id ="txt4" name="txt4" placeholder="campo1" autofocus value ="{{$valor->id}}" >
                        </div>
                    </div>
                    <div class ="form-group row">
                        <label for="txt5" class="col-3 col-form-label">campo2</label>
                        <div class="col-8">
                            <input type="text" class="form-control input" id ="txt5" name="txt5" placeholder="campo2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for ="txt6" class="col-3 col-form-label">campo3</label>
                        <div class ="col-8">
                            <input type="tel" id ="txt6" class="form-control input" name="txt6" placeholder="campo3" >
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" id="btnAddProv" class="btn btn-success" >agregar</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <!--                    <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>-->
                    </div>
            </form>
        </div>
    </div>
</div>
