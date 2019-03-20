<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Equipamentos em Assistência Técnica</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>

  <section class="content">



      <!--/row-->

      <div class="row ">

      <div class="col-md-12">
        <div class="panel panel-danger">
          <div class="panel-heading">
          <h3 class="panel-title">Equipamentos em Assitência Técnica</h3>
          </div>
          <div class="panel-body">
              <table class="table table-bordered table-striped">
              <tr>
                <td>Código</td>
                <td>Descrição</td>
                <td>Observação</td>
                <td>Atualização</td>
              </tr>
              @foreach ($assistencias as $assistencia)
                <tr>
                  <td class="col-md-1">{{ $assistencia->Codigo }}</td>
                  <td class="col-md-3">{{ $assistencia->descricao }} </td>
                  <td class="col-md-5">{{ $assistencia->obs }} </td>
                  <td class="col-md-2">{{ date('d/m/Y', strtotime($assistencia->data))}}</td>
                </tr>
              @endforeach
            </table>

          </div>

        </div>

      </div>



      </div>

      <div class="clearfix"></div>



</body>
</html>
