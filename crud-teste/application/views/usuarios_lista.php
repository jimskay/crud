<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Pacientes</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">-->
        <link href="<?php echo base_url() ?>plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/animate.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/style.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/style-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/theme/default.css" rel="stylesheet" id="theme" />
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
        <link href="<?php echo base_url() ?>plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?php echo base_url() ?>plugins/pace/pace.min.js"></script>
        <!-- ================== END BASE JS ================== -->		

    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <!-- begin #header -->
            <div id="header" class="header navbar navbar-default navbar-fixed-top">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin mobile sidebar expand / collapse button -->
                    <div class="navbar-header">
                        <a href="javascript:" class="navbar-brand" style="margin:-18px 0px 0px -18px;"><img src="<?php echo base_url() ?>img/logo.png">
        <!--<span class="logo"></span> Hville Admin-->
                <!-- <small>Show Room</small>-->
                        </a>
                        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- end mobile sidebar expand / collapse button -->

                    <!-- begin header navigation right -->
                    <ul class="nav navbar-nav navbar-right">
                        

                        <li id="notificacaoM" class="dropdown open"></li>

                        <li class="dropdown navbar-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url() ?>img/user-13.jpg" alt="" /> 
                                <span class="hidden-xs">Nome do Paciente</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu animated fadeInLeft">
                                <li class="arrow"></li>
                                <li><a href="javascript:;">Editar Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url() ?>index.php/sair">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- end header navigation right -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end #header -->

            <!-- begin #sidebar -->
            <div id="sidebar" class="sidebar">
                <!-- begin sidebar scrollbar -->
                <div data-scrollbar="true" data-height="100%">
                    <!-- begin sidebar user -->
                    <ul class="nav">
                        <li class="nav-profile">
                            <div class="image">
                                <a href="javascript:;"><img src="<?php echo base_url() ?>img/user-13.jpg" alt="" /></a>
                            </div>
                            <div class="info">
                                Nome do Paciente
                                <small>Teste</small>
                            </div>
                        </li>
                    </ul>
                    <!-- end sidebar user -->
                    <!-- begin sidebar nav -->
                    <ul class="nav">
                        <li class="nav-header">Menu</li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-laptop"></i>
                                <span>Menu</span>
                            </a>
                            <ul class="sub-menu" style="display: block;"></ul>
                        </li>
                        <!-- begin sidebar minify button -->
                        <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                        <!-- end sidebar minify button -->
                    </ul>
                    <!-- end sidebar nav -->
                </div>
                <!-- end sidebar scrollbar -->
            </div>
            <div class="sidebar-bg"></div>
            <!-- end #sidebar -->

            <!-- begin #content -->
            <div id="content" class="content">
                <!-- begin breadcrumb -->
                <ol class="breadcrumb pull-right">				
                    <li></li>
                    <li class="active">Usuários</li>
                </ol>
                <!-- end breadcrumb -->
                <!-- begin page-header -->
                <h1 class="page-header">Usuários<small></small></h1>
                <!-- end page-header -->

                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12">
                        <!-- begin panel -->
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">                             
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                </div>                     	

                                <h4 class="panel-title">&nbsp;</h4>
                            </div>
                            <div class="panel-body">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>                                        
                                            <th>Nome da M&atilde;e</th>                                        
                                            <th>Nome do Pai</th>
                                            <th>Data</th>
                                            <th>Status</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>                       
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        	$max = count($usuarios);
                                                             
								for($i=0; $i<$max; $i++) {

									$id 			= $usuarios[$i]['id'];
		        					
                                    $codigo = "";
                                    /*
                                    for($x=0; $x < $num_car; $x++) { 
						            	$codigo = $carx[mt_rand(0, $maxS)]; 
							        }        
                                    */
									if ($i % 2 == 0) {
										$nome = 'odd grade'.$codigo;                                        
									} else {
										$nome = 'even grade'.$codigo;
									}

                                    $d  = explode('-',$usuarios[$i]['data']);
                                    $dx = explode(' ',$d[2]);
                                    $dt = $dx[0].'/'.$d[1].'/'.$d[0];

                                    if ($usuarios[$i]['status']) {
                                        $st = 'Ativo';
                                    } else {
                                        $st = 'Inativo';
                                    }                                    

?>                                
                                    <tr class="<?=$nome?>" id="odd_gradeX_<?=($i+1)?>" data-id="<?=$usuarios[$i]['id']?>">
                                        <td style="width:906px;"><?=$usuarios[$i]['nome']?></td>
                                        <td style="width:906px;"><?=$usuarios[$i]['nome_mae']?></td>
                                        <td style="width:906px;"><?=$usuarios[$i]['nome_pai']?></td>
                                        <td style="width:906px;"><?=$dt?></td>
                                        <td style="width:906px;"><?=$st?></td>
                                        <td><a href="<?php echo base_url() ?>index.php/edit_usuarios/<?= strtolower($usuarios[$i]['id']); ?>"class="btn btn-info btn-lg"><span class="glyphicon glyphicon-pencil"></span> </a></td>
                                        <td><a class="btn btn-danger btn-icon btn-circle" id="remover_<?=($i+1)?>" onclick="remover(this.id);"><i class="fa fa-times"></i></a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>       
                                            
                                       

                                    </tbody>
                                </table>
                            </div>
                            <a href="<?php echo base_url() ?>index.php/add_usuarios"><button type="button" class="btn btn-danger m-r-5 m-b-5" style="margin:0px 0px 0px 13px;">Incluir Usuários</button></a>                           
                   	
                            <BR/>
                            <BR/>

                        </div>
                        <!-- end panel -->
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end #content -->


            <!-- begin scroll to top btn -->
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
            <!-- end scroll to top btn -->
        </div>
        <!-- end page container -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?php echo base_url()?>plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url() ?>plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="<?php echo base_url() ?>plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
                <script src="assets/crossbrowserjs/html5shiv.js"></script>
                <script src="assets/crossbrowserjs/respond.min.js"></script>
                <script src="assets/crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url() ?>plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() ?>plugins/jquery-cookie/jquery.cookie.js"></script>
        <!-- ================== END BASE JS ================== -->

        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="<?php echo base_url() ?>plugins/DataTables/media/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url() ?>plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url() ?>js/table-manage-default.demo.min.js"></script>
        <script src="<?php echo base_url() ?>js/apps.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>

            $(document).ready(function () {

                App.init();
                TableManageDefault.init();

                remover = function (id) {
                    var teste = confirm('Deseja mesmo excluir ?');
                    if(teste)

                    idx = id.split('_')[1];

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url() ?>index.php/usuariosremover',
                        data: {
                            id: $('#odd_gradeX_' + idx).data('id')
                        },
                        success: function (result) {
                            alert('O registro foi deletado!');
                        },
                                error:function(){
                                    alert('Erro ao deletar o registro,Tente novamente mais tarde!')
                                }
                    });

                    $('#remover_' + idx).closest('tr').fadeOut(400, function () {
                        $('#remover_' + idx).closest('tr').remove();
                    });

                    return false;

                };

            });

        </script>
    </body>
</html>
