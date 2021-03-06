@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Equipamentos
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Equipamentos</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>Pages</li>
                    <li class="active">Equipamentos</li>
                </ol>
            </section>
            <section class="content">
             <div class="table-scrollable">
                                    <table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <i class="fa fa-briefcase"></i>
                                                    Local
                                                </th>
                                                <th class="hidden-xs">
                                                    <i class="fa fa-question"></i>
                                                    Descrição
                                                </th>
                                                <th>
                                                    <i class="fa fa-bookAiri Satou"></i>
                                                    Total
                                                </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											 <?php foreach ($equipamentos as $p): ?>
											<tr>
											  <td><?= $p->descricao ?></td>
											  <td><?= $p->chaveserial ?></td>
											  <td><?= $p->voltagem ?></td>
											  <td><?= $p->nota ?></td>
											  <td>
												<a href="/produtos/mostra/<?= $p->id ?>">
												  <span class="glyphicon glyphicon-search"></span>
												</a>
											  </td>
											</tr>
											<?php endforeach ?>
											
											
                                            <tr>
                                                <td>
                                                    <a href="#">Pixel Ltd</a>
                                                </td>
                                                <td class="hidden-xs">Server Purchase</td>
                                                <td>
                                                    52560.10$
                                                    <span class="label label-sm label-success label-mini">Paid</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn default btn-xs green-stripe">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">Smart House</a>
                                                </td>
                                                <td class="hidden-xs">Furniture Purchase</td>
                                                <td>
                                                    5760.00$
                                                    <span class="label label-sm label-warning label-mini">Pending</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn default btn-xs yellow-stripe">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">FoodMaster Ltd</a>
                                                </td>
                                                <td class="hidden-xs">Annual Expenses</td>
                                                <td>
                                                    12400.00$
                                                    <span class="label label-sm label-primary label-mini">Paid</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn default btn-xs blue-stripe">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">WaterPure Ltd</a>
                                                </td>
                                                <td class="hidden-xs">Payment 2013</td>
                                                <td>
                                                    610.50$
                                                    <span class="label label-sm label-danger label-mini">Overdue</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn default btn-xs red-stripe">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
            
            
            </section>

        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
