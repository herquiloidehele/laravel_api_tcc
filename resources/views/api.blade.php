<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="php-apidoc - apid documenation generator">
    <meta name="author" content="Calin Rada">
    <title>API Agri</title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body      { padding-top: 70px; margin-bottom: 15px; }
        .tab-pane { padding-top: 10px; }
        .mt0      { margin-top: 0px; }
        .footer   { font-size: 12px; color: #666; }
        .label    { display: inline-block; min-width: 65px; padding: 0.3em 0.6em 0.3em; }
        .string   { color: green; }
        .number   { color: darkorange; }
        .boolean  { color: blue; }
        .null     { color: magenta; }
        .key      { color: red; }
        .popover  { max-width: 400px; max-height: 400px; overflow-y: auto;}
    </style>
</head>
<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">API Agri</a>
        </div>
        <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    Api key: <a href="javascript:void(0);" class="tooltipP" data-toggle="tooltip" title="Api key header with api key (key) and api key value (value) "><span class="glyphicon glyphicon-info-sign"></span></a>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" placeholder="key" id="apikey_key">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" placeholder="value" id="apikey_value">
                </div>
                <div class="form-group" style="margin-left: 10px;">
                    Basic Auth: <a href="javascript:void(0);" class="tooltipP" data-toggle="tooltip" title="If needed"><span class="glyphicon glyphicon-info-sign"></span></a>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" placeholder="Username" id="basic_auth_username">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" placeholder="Password" id="basic_auth_password">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-success btn-sm tooltipP" data-toggle="tooltip" title="Save API key, Basic Auth data and API url in localstorage" id="save_auth_data">
                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                    </button>
                </div>
            </form>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>Api URL</h5>
                <input id="apiUrl" type="text" class="form-control input-sm" placeholder="https://api.mydomain.tld">
            </div>
        </div>
        <hr>
        <div class="panel-group" id="accordion">
            <h2>Contas</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion0" href="#collapseOne0"> /api/users/produtor</a>
        </h4>
    </div>
    <div id="collapseOne0" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab0">
                <li class="active"><a href="#info0" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox0" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample0" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info0">
                    <div class="well">
                    Cria uma conta como produtor
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>username</td>
    <td>string</td>
    <td>Yes</td>
    <td>Username / Numero de Telefone</td>
</tr>

<tr>
    <td>password</td>
    <td>string</td>
    <td>Yes</td>
    <td>Password</td>
</tr>

<tr>
    <td>nome</td>
    <td>string</td>
    <td>Yes</td>
    <td>Nome do Utilizador</td>
</tr>

<tr>
    <td>foto</td>
    <td>string </td>
    <td>Yes</td>
    <td>Foto do Utilizador</td>
</tr>

<tr>
    <td>telefone</td>
    <td>string</td>
    <td>Yes</td>
    <td>Numero de Telefone</td>
</tr>

<tr>
    <td>distritos_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Distrito do produtor</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox0">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/users/produtor" method="POST" name="form0" id="form0">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="username">username</label>
    <input type="string" class="form-control input-sm" id="username" placeholder="Username / Numero de Telefone - Ex: " name="username">
</div>

<div class="form-group">
    <label class="control-label" for="password">password</label>
    <input type="string" class="form-control input-sm" id="password" placeholder="Password - Ex: " name="password">
</div>

<div class="form-group">
    <label class="control-label" for="nome">nome</label>
    <input type="string" class="form-control input-sm" id="nome" placeholder="Nome do Utilizador - Ex: " name="nome">
</div>

<div class="form-group">
    <label class="control-label" for="foto">foto</label>
    <input type="string " class="form-control input-sm" id="foto" placeholder="Foto do Utilizador - Ex: " name="foto">
</div>

<div class="form-group">
    <label class="control-label" for="telefone">telefone</label>
    <input type="string" class="form-control input-sm" id="telefone" placeholder="Numero de Telefone - Ex: " name="telefone">
</div>

<div class="form-group">
    <label class="control-label" for="distritos_id">distritos_id</label>
    <input type="integer" class="form-control input-sm" id="distritos_id" placeholder="Id do Distrito do produtor - Ex: " name="distritos_id">
</div>

        <button type="submit" class="btn btn-success send" rel="0">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers0"></pre>
                                <pre id="response0"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample0">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"> /api/users/revendedor</a>
        </h4>
    </div>
    <div id="collapseOne1" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab1">
                <li class="active"><a href="#info1" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox1" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample1" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info1">
                    <div class="well">
                    Cria uma conta como Revendedor
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>username</td>
    <td>string</td>
    <td>Yes</td>
    <td>Username / Numero de Telefone</td>
</tr>

<tr>
    <td>password</td>
    <td>string</td>
    <td>Yes</td>
    <td>Password</td>
</tr>

<tr>
    <td>nome</td>
    <td>string</td>
    <td>Yes</td>
    <td>Nome do Utilizador</td>
</tr>

<tr>
    <td>foto</td>
    <td>string </td>
    <td>Yes</td>
    <td>Foto do Utilizador</td>
</tr>

<tr>
    <td>telefone</td>
    <td>string</td>
    <td>Yes</td>
    <td>Numero de Telefone</td>
</tr>

<tr>
    <td>mercados_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Mercado do Revendedor</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox1">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/users/revendedor" method="POST" name="form1" id="form1">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="username">username</label>
    <input type="string" class="form-control input-sm" id="username" placeholder="Username / Numero de Telefone - Ex: " name="username">
</div>

<div class="form-group">
    <label class="control-label" for="password">password</label>
    <input type="string" class="form-control input-sm" id="password" placeholder="Password - Ex: " name="password">
</div>

<div class="form-group">
    <label class="control-label" for="nome">nome</label>
    <input type="string" class="form-control input-sm" id="nome" placeholder="Nome do Utilizador - Ex: " name="nome">
</div>

<div class="form-group">
    <label class="control-label" for="foto">foto</label>
    <input type="string " class="form-control input-sm" id="foto" placeholder="Foto do Utilizador - Ex: " name="foto">
</div>

<div class="form-group">
    <label class="control-label" for="telefone">telefone</label>
    <input type="string" class="form-control input-sm" id="telefone" placeholder="Numero de Telefone - Ex: " name="telefone">
</div>

<div class="form-group">
    <label class="control-label" for="mercados_id">mercados_id</label>
    <input type="integer" class="form-control input-sm" id="mercados_id" placeholder="Id do Mercado do Revendedor - Ex: " name="mercados_id">
</div>

        <button type="submit" class="btn btn-success send" rel="1">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers1"></pre>
                                <pre id="response1"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample1">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2"> /api/login</a>
        </h4>
    </div>
    <div id="collapseOne2" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab2">
                <li class="active"><a href="#info2" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox2" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample2" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info2">
                    <div class="well">
                    Efectuar um Login
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>username</td>
    <td>string</td>
    <td>Yes</td>
    <td>Username / Numero de Telefone</td>
</tr>

<tr>
    <td>password</td>
    <td>string</td>
    <td>Yes</td>
    <td>Password</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox2">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/login" method="POST" name="form2" id="form2">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="username">username</label>
    <input type="string" class="form-control input-sm" id="username" placeholder="Username / Numero de Telefone - Ex: " name="username">
</div>

<div class="form-group">
    <label class="control-label" for="password">password</label>
    <input type="string" class="form-control input-sm" id="password" placeholder="Password - Ex: " name="password">
</div>

        <button type="submit" class="btn btn-success send" rel="2">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers2"></pre>
                                <pre id="response2"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample2">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3"> /api/logout</a>
        </h4>
    </div>
    <div id="collapseOne3" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab3">
                <li class="active"><a href="#info3" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox3" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample3" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info3">
                    <div class="well">
                    Efectuar o Logout
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>token</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token de Autenticacao</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox3">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/logout" method="POST" name="form3" id="form3">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="token">token</label>
    <input type="string" class="form-control input-sm" id="token" placeholder="Token de Autenticacao - Ex: " name="token">
</div>

        <button type="submit" class="btn btn-success send" rel="3">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers3"></pre>
                                <pre id="response3"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample3">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4"> /api/get-user-token/{token}</a>
        </h4>
    </div>
    <div id="collapseOne4" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab4">
                <li class="active"><a href="#info4" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox4" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample4" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info4">
                    <div class="well">
                    Retorna o utilizador atraves do token
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>token</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token de Autenticacao</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox4">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/get-user-token/{token}" method="GET" name="form4" id="form4">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="token">token</label>
    <input type="string" class="form-control input-sm" id="token" placeholder="Token de Autenticacao - Ex: " name="token">
</div>

        <button type="submit" class="btn btn-success send" rel="4">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers4"></pre>
                                <pre id="response4"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample4">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5"> /api/user/verify-numbem/{numero}</a>
        </h4>
    </div>
    <div id="collapseOne5" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab5">
                <li class="active"><a href="#info5" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox5" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample5" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info5">
                    <div class="well">
                    Verifica se um determinado número é valido / único ou não
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>numero</td>
    <td>string</td>
    <td>Yes</td>
    <td>Numero do Utilizador</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox5">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/user/verify-numbem/{numero}" method="GET" name="form5" id="form5">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="numero">numero</label>
    <input type="string" class="form-control input-sm" id="numero" placeholder="Numero do Utilizador - Ex: " name="numero">
</div>

        <button type="submit" class="btn btn-success send" rel="5">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers5"></pre>
                                <pre id="response5"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample5">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
<h2>Utilizadores</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6"> /api/users</a>
        </h4>
    </div>
    <div id="collapseOne6" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab6">
                <li class="active"><a href="#info6" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox6" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample6" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info6">
                    <div class="well">
                    Retorna todos Utilizadores
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox6">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/users" method="get" name="form6" id="form6">

        Parameters
        <hr/>
        
        <button type="submit" class="btn btn-success send" rel="6">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers6"></pre>
                                <pre id="response6"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample6">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion7" href="#collapseOne7"> /api/users/{id}</a>
        </h4>
    </div>
    <div id="collapseOne7" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab7">
                <li class="active"><a href="#info7" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox7" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample7" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info7">
                    <div class="well">
                    Busca Uma Determinada Utilizadores existente
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Utilizadores ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox7">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/users/{id}" method="GET" name="form7" id="form7">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Utilizadores ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="7">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers7"></pre>
                                <pre id="response7"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample7">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion8" href="#collapseOne8"> /api/users</a>
        </h4>
    </div>
    <div id="collapseOne8" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab8">
                <li class="active"><a href="#info8" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox8" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample8" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info8">
                    <div class="well">
                    Cria uma nova Procura
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>username</td>
    <td>string</td>
    <td>Yes</td>
    <td>Username / Numero de Telefone</td>
</tr>

<tr>
    <td>password</td>
    <td>string</td>
    <td>Yes</td>
    <td>Password</td>
</tr>

<tr>
    <td>nome</td>
    <td>string</td>
    <td>Yes</td>
    <td>Nome do Utilizador</td>
</tr>

<tr>
    <td>foto</td>
    <td>string </td>
    <td>Yes</td>
    <td>Foto do Utilizador</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox8">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/users" method="POST" name="form8" id="form8">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="username">username</label>
    <input type="string" class="form-control input-sm" id="username" placeholder="Username / Numero de Telefone - Ex: " name="username">
</div>

<div class="form-group">
    <label class="control-label" for="password">password</label>
    <input type="string" class="form-control input-sm" id="password" placeholder="Password - Ex: " name="password">
</div>

<div class="form-group">
    <label class="control-label" for="nome">nome</label>
    <input type="string" class="form-control input-sm" id="nome" placeholder="Nome do Utilizador - Ex: " name="nome">
</div>

<div class="form-group">
    <label class="control-label" for="foto">foto</label>
    <input type="string " class="form-control input-sm" id="foto" placeholder="Foto do Utilizador - Ex: " name="foto">
</div>

        <button type="submit" class="btn btn-success send" rel="8">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers8"></pre>
                                <pre id="response8"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample8">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion9" href="#collapseOne9"> /api/users/{id}</a>
        </h4>
    </div>
    <div id="collapseOne9" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab9">
                <li class="active"><a href="#info9" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox9" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample9" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info9">
                    <div class="well">
                    Actualiza uma Utilizadores
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Utilizadores ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox9">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/users/{id}" method="put" name="form9" id="form9">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Utilizadores ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="9">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers9"></pre>
                                <pre id="response9"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample9">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion10" href="#collapseOne10"> /api/users/{id}</a>
        </h4>
    </div>
    <div id="collapseOne10" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab10">
                <li class="active"><a href="#info10" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox10" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample10" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info10">
                    <div class="well">
                    Elimina uma Utilizadores
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Utilizadores ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox10">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/users/{id}" method="delete" name="form10" id="form10">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Utilizadores ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="10">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers10"></pre>
                                <pre id="response10"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample10">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
<h2>Produtos</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion11" href="#collapseOne11"> /api/produtos</a>
        </h4>
    </div>
    <div id="collapseOne11" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab11">
                <li class="active"><a href="#info11" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox11" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample11" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info11">
                    <div class="well">
                    Busca todos os produtos existentes
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox11">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtos" method="GET" name="form11" id="form11">

        Parameters
        <hr/>
        
        <button type="submit" class="btn btn-success send" rel="11">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers11"></pre>
                                <pre id="response11"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample11">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion12" href="#collapseOne12"> /api/produtos</a>
        </h4>
    </div>
    <div id="collapseOne12" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab12">
                <li class="active"><a href="#info12" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox12" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample12" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info12">
                    <div class="well">
                    Cria um novo Produto
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>designacao</td>
    <td>string</td>
    <td>Yes</td>
    <td></td>
</tr>

<tr>
    <td>categorias_id</td>
    <td>int</td>
    <td>Yes</td>
    <td></td>
</tr>

<tr>
    <td>default_photo</td>
    <td>string</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox12">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtos" method="Post" name="form12" id="form12">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="designacao">designacao</label>
    <input type="string" class="form-control input-sm" id="designacao" placeholder=" - Ex: " name="designacao">
</div>

<div class="form-group">
    <label class="control-label" for="categorias_id">categorias_id</label>
    <input type="int" class="form-control input-sm" id="categorias_id" placeholder=" - Ex: " name="categorias_id">
</div>

<div class="form-group">
    <label class="control-label" for="default_photo">default_photo</label>
    <input type="string" class="form-control input-sm" id="default_photo" placeholder=" - Ex: " name="default_photo">
</div>

        <button type="submit" class="btn btn-success send" rel="12">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers12"></pre>
                                <pre id="response12"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample12">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion13" href="#collapseOne13"> /api/produtos/{id}</a>
        </h4>
    </div>
    <div id="collapseOne13" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab13">
                <li class="active"><a href="#info13" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox13" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample13" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info13">
                    <div class="well">
                    Busca Um Determinado Produto existente
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>User ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox13">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtos/{id}" method="GET" name="form13" id="form13">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="User ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="13">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers13"></pre>
                                <pre id="response13"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample13">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion14" href="#collapseOne14"> /api/produtos/{id}</a>
        </h4>
    </div>
    <div id="collapseOne14" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab14">
                <li class="active"><a href="#info14" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox14" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample14" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info14">
                    <div class="well">
                    Actualiza um Produto
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>string</td>
    <td>Yes</td>
    <td>User ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox14">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtos/{id}" method="put" name="form14" id="form14">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="string" class="form-control input-sm" id="id" placeholder="User ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="14">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers14"></pre>
                                <pre id="response14"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample14">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion15" href="#collapseOne15"> /api/produtos/{id}</a>
        </h4>
    </div>
    <div id="collapseOne15" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab15">
                <li class="active"><a href="#info15" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox15" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample15" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info15">
                    <div class="well">
                    Elimina um Produto
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>string</td>
    <td>Yes</td>
    <td>User ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox15">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtos/{id}" method="delete" name="form15" id="form15">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="string" class="form-control input-sm" id="id" placeholder="User ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="15">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers15"></pre>
                                <pre id="response15"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample15">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
<h2>Mercados</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion16" href="#collapseOne16"> /api/mercados</a>
        </h4>
    </div>
    <div id="collapseOne16" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab16">
                <li class="active"><a href="#info16" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox16" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample16" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info16">
                    <div class="well">
                    Cria um novo Mercado
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>designacao</td>
    <td>string</td>
    <td>Yes</td>
    <td>Nome do mercado</td>
</tr>

<tr>
    <td>distritos_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Distrito</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox16">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/mercados" method="Post" name="form16" id="form16">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="designacao">designacao</label>
    <input type="string" class="form-control input-sm" id="designacao" placeholder="Nome do mercado - Ex: " name="designacao">
</div>

<div class="form-group">
    <label class="control-label" for="distritos_id">distritos_id</label>
    <input type="integer" class="form-control input-sm" id="distritos_id" placeholder="Id do Distrito - Ex: " name="distritos_id">
</div>

        <button type="submit" class="btn btn-success send" rel="16">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers16"></pre>
                                <pre id="response16"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample16">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion17" href="#collapseOne17"> /api/mercados/{id}/todos-produtos</a>
        </h4>
    </div>
    <div id="collapseOne17" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab17">
                <li class="active"><a href="#info17" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox17" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample17" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info17">
                    <div class="well">
                    Retorna todos os produtos que sao vendidos em um determinado mercado
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do mercado</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox17">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/mercados/{id}/todos-produtos" method="get" name="form17" id="form17">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Id do mercado - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="17">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers17"></pre>
                                <pre id="response17"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample17">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion18" href="#collapseOne18"> /api/mercados/{id}/produtos-procurados</a>
        </h4>
    </div>
    <div id="collapseOne18" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab18">
                <li class="active"><a href="#info18" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox18" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample18" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info18">
                    <div class="well">
                    Retorna os 3 produtos mais procurados em um determinado mercado
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Mercado ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox18">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/mercados/{id}/produtos-procurados" method="GET" name="form18" id="form18">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Mercado ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="18">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers18"></pre>
                                <pre id="response18"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample18">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion19" href="#collapseOne19"> /api/mercados</a>
        </h4>
    </div>
    <div id="collapseOne19" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab19">
                <li class="active"><a href="#info19" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox19" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample19" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info19">
                    <div class="well">
                    Retorna todos Mercados
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox19">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/mercados" method="get" name="form19" id="form19">

        Parameters
        <hr/>
        
        <button type="submit" class="btn btn-success send" rel="19">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers19"></pre>
                                <pre id="response19"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample19">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion20" href="#collapseOne20"> /api/mercados/{id}</a>
        </h4>
    </div>
    <div id="collapseOne20" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab20">
                <li class="active"><a href="#info20" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox20" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample20" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info20">
                    <div class="well">
                    Busca Um Determinado Mercado existente
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Mercado ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox20">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/mercados/{id}" method="GET" name="form20" id="form20">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Mercado ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="20">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers20"></pre>
                                <pre id="response20"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample20">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion21" href="#collapseOne21"> /api/mercados/{id}</a>
        </h4>
    </div>
    <div id="collapseOne21" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab21">
                <li class="active"><a href="#info21" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox21" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample21" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info21">
                    <div class="well">
                    Actualiza um Mercado
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Mercado ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox21">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/mercados/{id}" method="put" name="form21" id="form21">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Mercado ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="21">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers21"></pre>
                                <pre id="response21"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample21">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion22" href="#collapseOne22"> /api/mercados/{id}</a>
        </h4>
    </div>
    <div id="collapseOne22" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab22">
                <li class="active"><a href="#info22" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox22" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample22" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info22">
                    <div class="well">
                    Elimina um Mercado
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Mercado ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox22">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/mercados/{id}" method="delete" name="form22" id="form22">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Mercado ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="22">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers22"></pre>
                                <pre id="response22"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample22">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
<h2>Procuras</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion23" href="#collapseOne23"> /api/procuras</a>
        </h4>
    </div>
    <div id="collapseOne23" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab23">
                <li class="active"><a href="#info23" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox23" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample23" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info23">
                    <div class="well">
                    Retorna todos Procuras
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox23">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/procuras" method="get" name="form23" id="form23">

        Parameters
        <hr/>
        
        <button type="submit" class="btn btn-success send" rel="23">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers23"></pre>
                                <pre id="response23"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample23">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion24" href="#collapseOne24"> /api/procuras/{id}</a>
        </h4>
    </div>
    <div id="collapseOne24" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab24">
                <li class="active"><a href="#info24" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox24" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample24" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info24">
                    <div class="well">
                    Busca Uma Determinada Procuras existente
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Procuras ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox24">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/procuras/{id}" method="GET" name="form24" id="form24">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Procuras ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="24">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers24"></pre>
                                <pre id="response24"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample24">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion25" href="#collapseOne25"> /api/procuras</a>
        </h4>
    </div>
    <div id="collapseOne25" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab25">
                <li class="active"><a href="#info25" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox25" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample25" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info25">
                    <div class="well">
                    Cria uma nova Procura
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>designacao</td>
    <td>string</td>
    <td>Yes</td>
    <td>Designacao</td>
</tr>

<tr>
    <td>revendedores_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do revendedor</td>
</tr>

<tr>
    <td>unidades_medidas_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id da Uniade de Medida</td>
</tr>

<tr>
    <td>produtos_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Produto</td>
</tr>

<tr>
    <td>quantidade</td>
    <td>double</td>
    <td>Yes</td>
    <td>Quantidade procurada</td>
</tr>

<tr>
    <td>distritos_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do distrito em que se localiza o revendedor</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox25">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/procuras" method="POST" name="form25" id="form25">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="designacao">designacao</label>
    <input type="string" class="form-control input-sm" id="designacao" placeholder="Designacao - Ex: " name="designacao">
</div>

<div class="form-group">
    <label class="control-label" for="revendedores_id">revendedores_id</label>
    <input type="integer" class="form-control input-sm" id="revendedores_id" placeholder="Id do revendedor - Ex: " name="revendedores_id">
</div>

<div class="form-group">
    <label class="control-label" for="unidades_medidas_id">unidades_medidas_id</label>
    <input type="integer" class="form-control input-sm" id="unidades_medidas_id" placeholder="Id da Uniade de Medida - Ex: " name="unidades_medidas_id">
</div>

<div class="form-group">
    <label class="control-label" for="produtos_id">produtos_id</label>
    <input type="integer" class="form-control input-sm" id="produtos_id" placeholder="Id do Produto - Ex: " name="produtos_id">
</div>

<div class="form-group">
    <label class="control-label" for="quantidade">quantidade</label>
    <input type="double" class="form-control input-sm" id="quantidade" placeholder="Quantidade procurada - Ex: " name="quantidade">
</div>

<div class="form-group">
    <label class="control-label" for="distritos_id">distritos_id</label>
    <input type="integer" class="form-control input-sm" id="distritos_id" placeholder="Id do distrito em que se localiza o revendedor - Ex: " name="distritos_id">
</div>

        <button type="submit" class="btn btn-success send" rel="25">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers25"></pre>
                                <pre id="response25"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample25">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion26" href="#collapseOne26"> /api/procuras/{id}</a>
        </h4>
    </div>
    <div id="collapseOne26" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab26">
                <li class="active"><a href="#info26" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox26" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample26" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info26">
                    <div class="well">
                    Actualiza uma Procuras
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Procuras ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox26">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/procuras/{id}" method="put" name="form26" id="form26">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Procuras ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="26">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers26"></pre>
                                <pre id="response26"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample26">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion27" href="#collapseOne27"> /api/procuras/{id}</a>
        </h4>
    </div>
    <div id="collapseOne27" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab27">
                <li class="active"><a href="#info27" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox27" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample27" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info27">
                    <div class="well">
                    Elimina uma Procuras
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Procuras ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox27">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/procuras/{id}" method="delete" name="form27" id="form27">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Procuras ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="27">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers27"></pre>
                                <pre id="response27"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample27">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion30" href="#collapseOne30"> /api/procuras/produtores/{id}</a>
        </h4>
    </div>
    <div id="collapseOne30" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab30">
                <li class="active"><a href="#info30" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox30" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample30" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info30">
                    <div class="well">
                    Retorna os produtos requisitados para um determinado produtor
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Produtor</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox30">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/procuras/produtores/{id}" method="GET" name="form30" id="form30">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Id do Produtor - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="30">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers30"></pre>
                                <pre id="response30"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample30">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
<h2>Requisições</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion28" href="#collapseOne28"> /api/procuras/produtos-produtor</a>
        </h4>
    </div>
    <div id="collapseOne28" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab28">
                <li class="active"><a href="#info28" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox28" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample28" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info28">
                    <div class="well">
                    Retorna as requisicoes feitas para o produtor de produtos de acordo com os seus interesses
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do User</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox28">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/procuras/produtos-produtor" method="GET" name="form28" id="form28">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Id do User - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="28">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers28"></pre>
                                <pre id="response28"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample28">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
<h2>Produtores</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion29" href="#collapseOne29"> /api/produz/produtor-producao/{id}</a>
        </h4>
    </div>
    <div id="collapseOne29" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab29">
                <li class="active"><a href="#info29" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox29" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample29" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info29">
                    <div class="well">
                    Retorna os produtos que um determinado produtor produz
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Produtor</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox29">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produz/produtor-producao/{id}" method="GET" name="form29" id="form29">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Id do Produtor - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="29">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers29"></pre>
                                <pre id="response29"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample29">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion31" href="#collapseOne31"> /api/produtores</a>
        </h4>
    </div>
    <div id="collapseOne31" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab31">
                <li class="active"><a href="#info31" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox31" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample31" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info31">
                    <div class="well">
                    Retorna todos Produtores
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox31">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtores" method="get" name="form31" id="form31">

        Parameters
        <hr/>
        
        <button type="submit" class="btn btn-success send" rel="31">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers31"></pre>
                                <pre id="response31"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample31">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion32" href="#collapseOne32"> /api/produtores/{id}</a>
        </h4>
    </div>
    <div id="collapseOne32" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab32">
                <li class="active"><a href="#info32" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox32" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample32" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info32">
                    <div class="well">
                    Busca Uma Determinada Produtores existente
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Produtores ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox32">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtores/{id}" method="GET" name="form32" id="form32">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Produtores ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="32">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers32"></pre>
                                <pre id="response32"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample32">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion33" href="#collapseOne33"> /api/produtores</a>
        </h4>
    </div>
    <div id="collapseOne33" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab33">
                <li class="active"><a href="#info33" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox33" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample33" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info33">
                    <div class="well">
                    Cria uma nova Procura
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>telefone</td>
    <td>string</td>
    <td>Yes</td>
    <td>Numero de Telefone</td>
</tr>

<tr>
    <td>users_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Utilizador</td>
</tr>

<tr>
    <td>distritos_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Distrito do produtor</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox33">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtores" method="POST" name="form33" id="form33">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="telefone">telefone</label>
    <input type="string" class="form-control input-sm" id="telefone" placeholder="Numero de Telefone - Ex: " name="telefone">
</div>

<div class="form-group">
    <label class="control-label" for="users_id">users_id</label>
    <input type="integer" class="form-control input-sm" id="users_id" placeholder="Id do Utilizador - Ex: " name="users_id">
</div>

<div class="form-group">
    <label class="control-label" for="distritos_id">distritos_id</label>
    <input type="integer" class="form-control input-sm" id="distritos_id" placeholder="Id do Distrito do produtor - Ex: " name="distritos_id">
</div>

        <button type="submit" class="btn btn-success send" rel="33">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers33"></pre>
                                <pre id="response33"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample33">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion34" href="#collapseOne34"> /api/produtores/{id}</a>
        </h4>
    </div>
    <div id="collapseOne34" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab34">
                <li class="active"><a href="#info34" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox34" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample34" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info34">
                    <div class="well">
                    Actualiza uma Produtores
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Produtores ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox34">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtores/{id}" method="put" name="form34" id="form34">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Produtores ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="34">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers34"></pre>
                                <pre id="response34"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample34">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion35" href="#collapseOne35"> /api/produtores/{id}</a>
        </h4>
    </div>
    <div id="collapseOne35" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab35">
                <li class="active"><a href="#info35" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox35" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample35" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info35">
                    <div class="well">
                    Elimina uma Produtores
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Produtores ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox35">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/produtores/{id}" method="delete" name="form35" id="form35">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Produtores ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="35">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers35"></pre>
                                <pre id="response35"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample35">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
<h2>Revendedores</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion36" href="#collapseOne36"> /api/revendedores</a>
        </h4>
    </div>
    <div id="collapseOne36" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab36">
                <li class="active"><a href="#info36" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox36" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample36" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info36">
                    <div class="well">
                    Retorna todos Revendedores
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox36">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/revendedores" method="get" name="form36" id="form36">

        Parameters
        <hr/>
        
        <button type="submit" class="btn btn-success send" rel="36">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers36"></pre>
                                <pre id="response36"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample36">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion37" href="#collapseOne37"> /api/revendedores/{id}</a>
        </h4>
    </div>
    <div id="collapseOne37" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab37">
                <li class="active"><a href="#info37" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox37" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample37" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info37">
                    <div class="well">
                    Busca Uma Determinada Revendedores existente
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Revendedores ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox37">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/revendedores/{id}" method="GET" name="form37" id="form37">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Revendedores ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="37">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers37"></pre>
                                <pre id="response37"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample37">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion38" href="#collapseOne38"> /api/revendedores</a>
        </h4>
    </div>
    <div id="collapseOne38" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab38">
                <li class="active"><a href="#info38" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox38" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample38" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info38">
                    <div class="well">
                    Cria uma nova Procura
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>telefone</td>
    <td>string</td>
    <td>Yes</td>
    <td>Numero de Telefone</td>
</tr>

<tr>
    <td>users_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Utilizador</td>
</tr>

<tr>
    <td>mercados_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Id do Mercado do revendedor</td>
</tr>

<tr>
    <td>tipo_revendedor</td>
    <td>ENUM - 'FABRICA','LOJA','INDIVIDUAL' </td>
    <td>Yes</td>
    <td>Tipo de Revendedor</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox38">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/revendedores" method="POST" name="form38" id="form38">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="telefone">telefone</label>
    <input type="string" class="form-control input-sm" id="telefone" placeholder="Numero de Telefone - Ex: " name="telefone">
</div>

<div class="form-group">
    <label class="control-label" for="users_id">users_id</label>
    <input type="integer" class="form-control input-sm" id="users_id" placeholder="Id do Utilizador - Ex: " name="users_id">
</div>

<div class="form-group">
    <label class="control-label" for="mercados_id">mercados_id</label>
    <input type="integer" class="form-control input-sm" id="mercados_id" placeholder="Id do Mercado do revendedor - Ex: " name="mercados_id">
</div>

<div class="form-group">
    <label class="control-label" for="tipo_revendedor">tipo_revendedor</label>
    <input type="ENUM - 'FABRICA','LOJA','INDIVIDUAL' " class="form-control input-sm" id="tipo_revendedor" placeholder="Tipo de Revendedor - Ex: " name="tipo_revendedor">
</div>

        <button type="submit" class="btn btn-success send" rel="38">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers38"></pre>
                                <pre id="response38"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample38">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion39" href="#collapseOne39"> /api/revendedores/{id}</a>
        </h4>
    </div>
    <div id="collapseOne39" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab39">
                <li class="active"><a href="#info39" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox39" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample39" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info39">
                    <div class="well">
                    Actualiza uma Revendedores
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Revendedores ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox39">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/revendedores/{id}" method="put" name="form39" id="form39">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Revendedores ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="39">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers39"></pre>
                                <pre id="response39"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample39">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion40" href="#collapseOne40"> /api/revendedores/{id}</a>
        </h4>
    </div>
    <div id="collapseOne40" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab40">
                <li class="active"><a href="#info40" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox40" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample40" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info40">
                    <div class="well">
                    Elimina uma Revendedores
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Revendedores ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox40">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/revendedores/{id}" method="delete" name="form40" id="form40">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Revendedores ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="40">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers40"></pre>
                                <pre id="response40"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample40">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
<h2>Unidades de Medida</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion41" href="#collapseOne41"> /api/unidades-medidas</a>
        </h4>
    </div>
    <div id="collapseOne41" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab41">
                <li class="active"><a href="#info41" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox41" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample41" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info41">
                    <div class="well">
                    Retorna todos Unidades de Medida
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox41">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/unidades-medidas" method="get" name="form41" id="form41">

        Parameters
        <hr/>
        
        <button type="submit" class="btn btn-success send" rel="41">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers41"></pre>
                                <pre id="response41"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample41">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion42" href="#collapseOne42"> /api/unidades-medidas/{id}</a>
        </h4>
    </div>
    <div id="collapseOne42" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab42">
                <li class="active"><a href="#info42" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox42" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample42" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info42">
                    <div class="well">
                    Busca Uma Determinada Unidades de Medida existente
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Unidades de Medida ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox42">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/unidades-medidas/{id}" method="GET" name="form42" id="form42">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Unidades de Medida ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="42">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers42"></pre>
                                <pre id="response42"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample42">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion43" href="#collapseOne43"> /api/unidades-medidas</a>
        </h4>
    </div>
    <div id="collapseOne43" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab43">
                <li class="active"><a href="#info43" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox43" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample43" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info43">
                    <div class="well">
                    Cria uma nova Procura
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>username</td>
    <td>string</td>
    <td>Yes</td>
    <td>Username / Numero de Telefone</td>
</tr>

<tr>
    <td>password</td>
    <td>string</td>
    <td>Yes</td>
    <td>Password</td>
</tr>

<tr>
    <td>nome</td>
    <td>string</td>
    <td>Yes</td>
    <td>Nome do Utilizador</td>
</tr>

<tr>
    <td>foto</td>
    <td>string </td>
    <td>Yes</td>
    <td>Foto do Utilizador</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox43">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/unidades-medidas" method="POST" name="form43" id="form43">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="username">username</label>
    <input type="string" class="form-control input-sm" id="username" placeholder="Username / Numero de Telefone - Ex: " name="username">
</div>

<div class="form-group">
    <label class="control-label" for="password">password</label>
    <input type="string" class="form-control input-sm" id="password" placeholder="Password - Ex: " name="password">
</div>

<div class="form-group">
    <label class="control-label" for="nome">nome</label>
    <input type="string" class="form-control input-sm" id="nome" placeholder="Nome do Utilizador - Ex: " name="nome">
</div>

<div class="form-group">
    <label class="control-label" for="foto">foto</label>
    <input type="string " class="form-control input-sm" id="foto" placeholder="Foto do Utilizador - Ex: " name="foto">
</div>

        <button type="submit" class="btn btn-success send" rel="43">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers43"></pre>
                                <pre id="response43"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample43">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion44" href="#collapseOne44"> /api/unidades-medidas/{id}</a>
        </h4>
    </div>
    <div id="collapseOne44" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab44">
                <li class="active"><a href="#info44" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox44" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample44" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info44">
                    <div class="well">
                    Actualiza uma Unidades de Medida
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Unidades de Medida ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox44">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/unidades-medidas/{id}" method="put" name="form44" id="form44">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Unidades de Medida ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="44">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers44"></pre>
                                <pre id="response44"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample44">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion45" href="#collapseOne45"> /api/unidades-medidas/{id}</a>
        </h4>
    </div>
    <div id="collapseOne45" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab45">
                <li class="active"><a href="#info45" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox45" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample45" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info45">
                    <div class="well">
                    Elimina uma Unidades de Medida
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td>Tipo de Conteudo</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Unidades de Medida ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox45">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Tipo de Conteudo - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/unidades-medidas/{id}" method="delete" name="form45" id="form45">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Unidades de Medida ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="45">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers45"></pre>
                                <pre id="response45"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample45">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
<h2>Categorias de Produtos</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion46" href="#collapseOne46"> /api/categorias</a>
        </h4>
    </div>
    <div id="collapseOne46" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab46">
                <li class="active"><a href="#info46" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox46" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample46" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info46">
                    <div class="well">
                    Retorna todos Categorias de Produtos
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox46">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/categorias" method="get" name="form46" id="form46">

        Parameters
        <hr/>
        
        <button type="submit" class="btn btn-success send" rel="46">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers46"></pre>
                                <pre id="response46"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample46">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion47" href="#collapseOne47"> /api/categorias/{id}</a>
        </h4>
    </div>
    <div id="collapseOne47" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab47">
                <li class="active"><a href="#info47" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox47" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample47" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info47">
                    <div class="well">
                    Busca Um Determinado Categoria existente
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Categoria ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox47">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/categorias/{id}" method="GET" name="form47" id="form47">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Categoria ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="47">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers47"></pre>
                                <pre id="response47"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample47">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion48" href="#collapseOne48"> /api/categorias/{id}</a>
        </h4>
    </div>
    <div id="collapseOne48" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab48">
                <li class="active"><a href="#info48" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox48" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample48" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info48">
                    <div class="well">
                    Actualiza um Categoria
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Categoria ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox48">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/categorias/{id}" method="put" name="form48" id="form48">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Categoria ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="48">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers48"></pre>
                                <pre id="response48"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample48">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion49" href="#collapseOne49"> /api/categorias/{id}</a>
        </h4>
    </div>
    <div id="collapseOne49" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab49">
                <li class="active"><a href="#info49" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox49" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample49" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info49">
                    <div class="well">
                    Elimina um Categoria
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>Content-Type</td>
    <td>application/json</td>
    <td>Yes</td>
    <td></td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <td>id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>Categoria ID</td>
</tr>

    </tbody>
</table>

                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox49">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
        Headers
        <hr/>
        <div class="headers">
        <div class="form-group">
    <label class="control-label" for="Content-Type">Content-Type</label>
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder=" - Ex: " name="Content-Type">
</div>

        </div>
</div>
<div class="col-md-6">
    <form enctype="application/x-www-form-urlencoded" role="form" action="/api/categorias/{id}" method="delete" name="form49" id="form49">

        Parameters
        <hr/>
        <div class="form-group">
    <label class="control-label" for="id">id</label>
    <input type="integer" class="form-control input-sm" id="id" placeholder="Categoria ID - Ex: " name="id">
</div>

        <button type="submit" class="btn btn-success send" rel="49">Send</button>
    </form>
</div>

                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers49"></pre>
                                <pre id="response49"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample49">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

        </div>
        <hr>

        <div class="row mt0 footer">
            <div class="col-md-6" align="left">
                Generated on 2019-07-01, 22:15:16
            </div>
            <div class="col-md-6" align="right">
                <a href="https://github.com/calinrada/php-apidoc" target="_blank">php-apidoc v1.3.8</a>
            </div>
        </div>

    </div> <!-- /container -->

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function syntaxHighlight(json) {
        if (typeof json != 'string') {
            json = JSON.stringify(json, undefined, 2);
        }
        json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
        return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function(match) {
            var cls = 'number';
            if (/^"/.test(match)) {
                if (/:$/.test(match)) {
                    cls = 'key';
                } else {
                    cls = 'string';
                }
            } else if (/true|false/.test(match)) {
                cls = 'boolean';
            } else if (/null/.test(match)) {
                cls = 'null';
            }
            return '<span class="' + cls + '">' + match + '</span>';
        });
    }

    function prepareStr(str) {
        try {
            return syntaxHighlight(JSON.stringify(JSON.parse(str.replace(/'/g, '"')), null, 2));
        } catch (e) {
            return str;
        }
    }
    var storage = (function() {
        var uid = new Date;
        var storage;
        var result;
        try {
            (storage = window.localStorage).setItem(uid, uid);
            result = storage.getItem(uid) == uid;
            storage.removeItem(uid);
            return result && storage;
        } catch (exception) {}
    }());

    $.fn.serializeObject = function()
    {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if(!this.value) {
                return;
            }
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

    $(document).ready(function() {

        if (storage) {
            $('#basic_auth_username').val(storage.getItem('basicAuthUsername'));
            $('#basic_auth_password').val(storage.getItem('basicAuthPassword'));
            $('#apikey_key').val(storage.getItem('apiKey'));
            $('#apikey_value').val(storage.getItem('apiKeyValue'));
            $('#apiUrl').val(storage.getItem('apiUrl'));
        }

        $('#php-apidoctab a').click(function(e) {
            e.preventDefault()
            $(this).tab('show')
        });

        $('.tooltipP').tooltip({
            placement: 'bottom'
        });

        $('code[id^=response]').hide();

        $.each($('pre[id^=sample_response],pre[id^=sample_post_body]'), function() {
            if ($(this).html() == 'NA') {
                return;
            }
            var str = prepareStr($(this).html());
            $(this).html(str);
        });

        $("[data-toggle=popover]").popover({placement:'right'});

        $('[data-toggle=popover]').on('shown.bs.popover', function() {
            var $sample = $(this).parent().find(".popover-content"),
                str = $(this).data('content');
            if (typeof str == "undefined" || str === "") {
                return;
            }
            var str = prepareStr(str);
            $sample.html('<pre>' + str + '</pre>');
        });

        $('body').on('click', '#save_auth_data', function(e) {
            if (storage) {
                storage.setItem('basicAuthUsername', $('#basic_auth_username').val());
                storage.setItem('basicAuthPassword', $('#basic_auth_password').val());
                storage.setItem('apiKey', $('#apikey_key').val());
                storage.setItem('apiKeyValue', $('#apikey_value').val());
                storage.setItem('apiUrl', $('#apiUrl').val());
            } else {
                alert('Your browser does not support local storage');
            }
        });

        $('body').on('click', '.send', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            //added /g to get all the matched params instead of only first
            var matchedParamsInRoute = $(form).attr('action').match(/[^{]+(?=\})/g);
            var theId = $(this).attr('rel');
            //keep a copy of action attribute in order to modify the copy
            //instead of the initial attribute
            var url = $(form).attr('action');

            var serializedData = new FormData();

            $(form).find('input').each(function (i, input) {
                if ($(input).attr('type') == 'file') {
                    serializedData.append($(input).attr('name'), $(input)[0].files[0]);
                } else {
                    serializedData.append($(input).attr('name'), $(input).val())
                }
            });

            var index, key, value;

            if(matchedParamsInRoute) {
                for (index = 0; index < matchedParamsInRoute.length; ++index) {
                    try {
                        key = matchedParamsInRoute[index];
                        value = serializedData[key];
                        if (typeof value == "undefined") value ="";
                        url = url.replace("{" + key + "}", value);
                        delete serializedData[key];
                    } catch (err) {
                        console.log(err);
                    }
                }
            }

            var st_headers = {};

            var basicAuthUsername = $('#basic_auth_username').val();
            var basicAuthPassword = $('#basic_auth_password').val();
            var apiKey = $('#apikey_key').val();
            var apiKeyValue = $('#apikey_value').val();

            if(apiKey.length > 0 && apiKeyValue.length > 0) {
                st_headers[apiKey] = apiKeyValue;
            }

            if (basicAuthUsername != '' && basicAuthPassword != '') {
                st_headers['Authorization'] = "Basic " + btoa(basicAuthUsername + ":" + basicAuthPassword);
            }

            $("#sandbox" + theId + " .headers input[type=text]").each(function() {
                val = $(this).val();
                if(val.length > 0) {
                    st_headers[$(this).prop('name')] = val;
                }
            });

            $.ajax({
                url: $('#apiUrl').val() + url,
                data: $(form).attr('method') == 'get' ? $(form).serialize() : serializedData,
                type: $(form).attr('method') + '',
                dataType: 'json',
                contentType: false,
                processData: false,
                headers: st_headers,
                success: function(data, textStatus, xhr) {
                    if (typeof data === 'object') {
                        var str = JSON.stringify(data, null, 2);
                        $('#response' + theId).html(syntaxHighlight(str));
                    } else {
                        $('#response' + theId).html(data || '');
                    }
                    $('#response_headers' + theId).html('HTTP ' + xhr.status + ' ' + xhr.statusText + '<br/><br/>' + xhr.getAllResponseHeaders());
                    $('#response' + theId).show();
                },
                error: function(xhr, textStatus, error) {
                    var str = JSON.stringify($.parseJSON(xhr.responseText), null, 2);
                    $('#response_headers' + theId).html('HTTP ' + xhr.status + ' ' + xhr.statusText + '<br/><br/>' + xhr.getAllResponseHeaders());
                    $('#response' + theId).html(syntaxHighlight(str));
                    $('#response' + theId).show();

                }
            });
            return false;
        });
    });
    </script>
</body>
</html>
