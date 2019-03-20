@extends('admin/layouts/default')



{{-- Page title --}}

@section('title')

Solid CI

@parent

@stop



{{-- page level styles --}}

@section('header_styles')



    <link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" media="all" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/only_dashboard.css') }}" />



@stop



{{-- Page content --}}

@section('content')



<section class="content-header">

    <h1>Equipamentos do Centro de Informática da Pintos</h1>

    <ol class="breadcrumb">

        <li class="active">

            <a href="#">

                <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i> Painel

            </a>

        </li>

    </ol>

</section>

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
							<td>Data de Atualização</td>
							<td>Ações</td>
						</tr>
						@foreach ($assistencias as $assistencia)
							<tr>
								<td class="col-md-1">{{ $assistencia->Codigo }}</td>
								<td class="col-md-3">{{ $assistencia->descricao }} </td>
								<td class="col-md-5">{{ $assistencia->obs }} </td>
								<td class="col-md-2">{{ date('d/m/Y', strtotime($assistencia->data))}}</td>
								<td class="col-md-1 text-center">  <a href="{{ route('equipamento_show', $assistencia->Codigo) }}" title="Mostrar"><span class="glyphicon glyphicon-search"></span></a></td>
							</tr>
						@endforeach
					</table>
          <div class="col-md-2 pull-right">
            <a class="btn btn-lg btn-primary" href="{{ route('assistImpressao') }}" role="button">Imprimir</a>
          </div>
			  </div>

			</div>

		</div>



    </div>

    <div class="clearfix"></div>





</section>



@stop



{{-- page level scripts --}}

@section('footer_scripts')



    <!--  todolist-->

    <script src="{{ asset('assets/js/todolist.js') }}" ></script>

    <!-- EASY PIE CHART JS -->

    <script src="{{ asset('assets/vendors/charts/easypiechart.min.js') }}" ></script>

    <script src="{{ asset('assets/vendors/charts/jquery.easypiechart.min.js') }}" ></script>

    <script src="{{ asset('assets/vendors/charts/jquery.easingpie.js') }}" ></script>

    <!--for calendar-->

    <script src="{{ asset('assets/vendors/fullcalendar/moment.min.js') }}"  type="text/javascript"></script>

    <script src="{{ asset('assets/vendors/fullcalendar/fullcalendar.min.js') }}"  type="text/javascript"></script>

    <!--   Realtime Server Load  -->

    <script src="{{ asset('assets/vendors/charts/jquery.flot.min.js') }}"  type="text/javascript"></script>

    <script src="{{ asset('assets/vendors/charts/jquery.flot.resize.min.js') }}"  type="text/javascript"></script>

    <!--Sparkline Chart-->

    <script src="{{ asset('assets/vendors/charts/jquery.sparkline.js') }}" ></script>

    <!-- Back to Top-->

    <script type="text/javascript" src="{{ asset('assets/vendors/countUp/countUp.js') }}" ></script>

    <!--   maps -->

    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" ></script>

    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}" ></script>

    <script src="{{ asset('assets/vendors/jscharts/Chart.js') }}" ></script>

    <script src="{{ asset('assets/js/dashboard.js') }}"  type="text/javascript"></script>





@stop
