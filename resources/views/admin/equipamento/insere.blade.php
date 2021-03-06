@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Inserir Equipamento
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
	<h1>Inserir Equipamento</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('dashboard') }}">
				<i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
				Dashboard
			</a>
		</li>
		<li>
			<a href="{{ route('equipamento_index') }}">
				Equipamentos
			</a>
		</li>
		<li class="active">
			Novo
		</li>
	</ol>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="panel-title">Dados novo Equipamento</span>
				</div>
				<div class="panel-body">

					<form class="form-horizontal" method="POST" action="{{ route('equipamento_adiciona') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="descricao" class="col-sm-2 control-label">Descrição</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="descricao" name="descricao" required="yes">
							</div>
							
							<label for="description" class="col-sm-1 control-label">Status</label>
							<div class="col-sm-2">
								<select class="form-control" name="status">
									@foreach($entity_status as $key => $state)
										<option value="{{ $key }}">{{ $state }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="datacompra" class="col-sm-2 control-label">Data da Compra</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="datacompra" name="datacompra" required="yes">
							</div>
							<label for="modelo" class="col-sm-1 control-label">Modelo</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="modelo" name="modelo">
							</div>
							<label for="chaveserial" class="col-sm-1 control-label">Chave/Serial</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="chaveserial" name="chaveserial">
							</div>
						</div>

						<div class="form-group">
							<label for="voltagem" class="col-sm-2 control-label">Voltagem</label>
							<div class="col-sm-2">
								<select class="form-control" name="voltagem">
									@foreach($voltage as $key => $volts)
										<option value="{{ $key }}">{{ $volts }}</option>
									@endforeach
								</select>
							</div>
							<label for="idmarca" class="col-sm-1 control-label">Marca</label>
							<div class="col-sm-3">
								<select class="form-control" name="idmarca">
									@foreach($marcas as $marca)
										<option value="{{ $marca->id }}">{{ $marca->descricao }}</option>
									@endforeach
								</select>
							</div>
							<label for="valorcompra" class="col-sm-1 control-label">Valor</label>
							<div class="col-sm-3">
								<div class="input-group">
									<div class="input-group-addon">R$</div>
									<input type="number" step="0.01" class="form-control" id="valorcompra" name="valorcompra">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="codigobarras" class="col-sm-2 control-label">Código de Barras</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="codigobarras" name="codigobarras">
							</div>
							<label for="nota" class="col-sm-2 control-label">Nota Fiscal</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="nota" name="nota">
							</div>
						</div>

						<div class="form-group">
							<label for="nota" class="col-sm-2 control-label">Categoria</label>
							<div class="col-sm-4">
								<select class="form-control" name="idcategoria">
									
									@foreach($categorias as $c)
										<option 
										value="{{ $c->id }}">{{ $c->nome }}</option>
										</option>
									@endforeach
								</select>
							</div>
							<label for="nota" class="col-sm-1 control-label">Grupo</label>
							<div class="col-sm-5">
								<select class="form-control" name="idgrupo">
									@foreach($grupos as $g)
										<option 
										value="{{ $g->id }}">{{ $g->nome }}</option>
										</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="observacoes" class="col-sm-2 control-label">Observações</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="3" id="observacoes" name="observacoes"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="caracteristicas" class="col-sm-2 control-label">Características</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="3" id="caracteristicas" name="caracteristicas"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="idfornecedor" class="col-sm-2 control-label">Fornecedor</label>
							<div class="col-sm-2">
								<select class="form-control" name="idfornecedor">
									@foreach($fornecedores as $fornecedor)
										<option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
									@endforeach
								</select>
							</div>
							<label for="idloja" class="col-sm-1 control-label">Filial</label>
							<div class="col-sm-3">
								<select class="form-control" name="idloja" required="yes">
									@foreach($lojas as $l)
										<option value="{{ $l->id }}">{{ $l->descricao }}</option>
									@endforeach
								</select>
							</div>
							<label for="idsetor" class="col-sm-1 control-label">Setor</label>
							<div class="col-sm-3">
								<select class="form-control" name="idsetor">
									@foreach($setores as $setor)
										<option value="{{ $setor->id }}">{{ $setor->nome }}</option>
									@endforeach
								</select>
							</div>
							
						</div>

						<div class="form-group">
							<label for="idorcador" class="col-sm-2 control-label">Garantia</label>
							<div class="col-sm-3">
								<!--<input type="date" class="form-control" id="garantia" name="garantia" format="dd/MM/yyyy">-->
								<input type="text" class="form-control" id="garantia" name="garantia" required="yes">
							</div>
							<label for="idorcador" class="col-sm-2 control-label">Orçador</label>
							<div class="col-sm-2">
								<select class="form-control" name="idorcador">
									<option value="">Nenhum</option>
									@foreach($users as $user)
										<option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
									@endforeach
								</select>
							</div>
							<label for="idaprovador" class="col-sm-1 control-label">Aprovador</label>
							<div class="col-sm-2">
								<select class="form-control" name="idaprovador">
									<option value="">Nenhum</option>
									@foreach($users as $user)
										<option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="situacao" class="col-sm-2 control-label">Situação</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="situacao" name="situacao">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">
									<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Salvar
								</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

</section>

	@stop

{{-- page level scripts --}}
@section('footer_scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js" type="text/javascript"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/locales/bootstrap-datepicker.pt-BR.min.js"> </script>

<script type="text/javascript">

	$('#datacompra').datepicker({
		autoclose: true,
		format: 'dd/mm/yyyy',
		language: 'pt-BR',
		todayBtn: 'linked',
		todayHighlight: true,
	});

	$('#garantia').datepicker({
		autoclose: true,
		format: 'dd/mm/yyyy',
		language: 'pt-BR',
		todayBtn: 'linked',
		todayHighlight: true,
	});

</script>

@stop

