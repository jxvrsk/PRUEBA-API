<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Conversor</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <!-- Styles -->
        <style>
            input:disabled
{
	background-color   : #FFFFFF;
}
        </style>
    </head>
    <body>


    <div class="callout small success">
        <div class="row column text-center">
            <h1>Conversor de Bitcoins</h1>
        </div>
    </div>

    <!-- We can now combine rows and columns when there's only one column in that row -->
    <div class="row medium-8 large-7 columns">
        <div class="blog-post">
            <h3 style="text-align: center;">Convierta sus bitcoins de dolares a pesos chilenos</h3><br>
                <div class="form-icons">
                    <div class="input-group">
                        <h6 class="input-group-label">BIT
        </h6>
                        <input class="input-group-field" type="number"  value="1" disabled>
                    </div>

                    <div class="input-group">
                    <h6 class="input-group-label">USD
        </h6>
        <input class="input-group-field" type="text"  id="dolar" readonly="readonly"   disabled value="${{$dolarr}}">
                    </div>

                    <div class="input-group">
                    <h6 class="input-group-label">CLP
        </h6>
        <input class="input-group-field" type="text"  readonly  disabled value="${{$clpp}}">
                    </div>
                    <div class="input-group">
                    <h6 class="input-group-label">Fecha
        </h6>
        <input class="input-group-field" type="text" readonly disabled value="{{$fecha}}">
                    </div>
                </div>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>
