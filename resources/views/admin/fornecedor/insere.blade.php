@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Inserir Fornecedor
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
	<h1>Inserir Fornecedor</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('dashboard') }}">
				<i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
				Dashboard
			</a>
		</li>
		<li>
			<a href="{{ route('fornecedor_index') }}">
				Fornecedores
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
                    <span class="panel-title">Dados do Fornecedor</span>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('fornecedor_adiciona') }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="nome">
                            </div>
                            <label for="status" class="col-sm-1 control-label">Status</label>
                            <div class="col-sm-2">
                                <select class="form-control" name="status">
                                    @foreach($entity_status as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
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
                            <label for="logradouro" class="col-sm-2 control-label">Logradouro</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="logradouro">
                            </div>
                            <label for="numero" class="col-sm-1 control-label">Número</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="numero">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="complemento" class="col-sm-2 control-label">Complemento</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="complemento">
                            </div>

                            <label for="bairro" class="col-sm-1 control-label">Bairro</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="bairro">
                            </div>
                            <label for="cep" class="col-sm-1 control-label">CEP</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="cep">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cidade" class="col-sm-2 control-label">Cidade</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="cidade">
                            </div>
                            <label for="estado" class="col-sm-1 control-label">Estado</label>
                            <div class="col-sm-2">
                                <select class="form-control" name="estado">
                                    @foreach($fornecedor_estados as $estado)
                                        <option value="{{ $estado }}">{{ $estado }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ddd1" class="col-sm-2 control-label">Telefone 1</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="ddd1" placeholder="ddd">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="telefone1" placeholder="telefone">
                            </div>

                            <label for="ddd2" class="col-sm-2 control-label">Telefone 2</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="ddd2" placeholder="ddd">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="telefone2" placeholder="telefone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ddd3" class="col-sm-2 control-label">Telefone 1</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="ddd3" placeholder="ddd">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="telefone3" placeholder="telefone">
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
@stop

