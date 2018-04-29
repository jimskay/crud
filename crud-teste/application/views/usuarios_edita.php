<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Pacientes</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="<?php echo base_url()?>plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/animate.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/style.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/style-responsive.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/jquery.fancybox-1.3.1.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/theme/default.css" rel="stylesheet" id="theme" />
    <link href="<?php echo base_url()?>plugins/jquery/jquery-1.9.1.js" rel="stylesheet" />
     <link href="<?php echo base_url()?>plugins/jquery/jquery.maskMoney.js" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?php echo base_url()?>plugins/isotope/isotope.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>plugins/lightbox/css/lightbox.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url()?>css/jquery.mobile.datepicker.css" />

    <link rel="stylesheet" href="<?php echo base_url()?>css/jquery.mobile.datepicker.theme.css" />

    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo base_url()?>plugins/pace/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>plugins/jquery/jquery-1.9.1.js" ></script>
    <script type="text/javascript" src="<?php echo base_url()?>plugins/jquery/jquery.maskMoney.js" ></script>
    




    
  <script type="text/javascript"> 
function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}
function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}
function mreais(v){
	v=v.replace(/\D/g,"")						//Remove tudo o que não é dígito
	v=v.replace(/(\d{2})$/,",$1") 			//Coloca a virgula
	v=v.replace(/(\d+)(\d{3},\d{2})$/g,"R$ $1.$2") 	//Coloca o primeiro ponto
	return v
}
function placa(v){
	v=v.replace(/\D/g,"")						//Remove tudo o que não é dígito
	v=v.replace(/(\d{2})$/,",$1") 			//Coloca a virgula
	v=v.replace(aaa-9999) 	//Coloca o primeiro ponto
	return v
}

</script> 
<script src="<?php echo base_url()?>plugins/jquery/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
   jQuery(document).ready(function($){
     $('#PLACA').mask('aaa-9999')
   });
</script>

 
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
                    <a href="javascript:" class="navbar-brand" style="margin:-18px 0px 0px -18px;"><img src="<?php echo base_url()?>img/logo.png">
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
                            <img src="<?php echo base_url()?>img/user-13.jpg" alt="" /> 
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
                            <a href="javascript:;"><img src="<?php echo base_url()?>img/user-13.jpg" alt="" /></a>
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
                <li class="active">Pacientes</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Pacientes<small></small></h1>
            <!-- end page-header -->
            
            <!-- begin row -->
            <div class="row"></div>               
        
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-12 -->
                <div class="col-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-5">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>                   
                            </div>
                            <h4 class="panel-title">Dados</h4>
                        </div>
                        <div class="panel-body">
                            <?php echo validation_errors(); ?>
                            <?php
                                $attributes = array('class' => 'form-signin', 'role' => 'form');
                                echo form_open(base_url().'index.php/cadastrar_usuarios',$attributes);
                            ?>  

                                <h4 class="m-t-20">Informa&ccedil;&otilde;es</h4>  
                                 
                                <label class="control-label col-md-4 col-sm-4">Nome:</label>    
                                <input class="form-control input-lg" type="text" id="Nome" name="Nome" value="<?=$nome?>"  required="required"  placeholder="Informe o nome do usuário" data-parsley-required="true"  /> 
                                
                                <BR/>                           
                                <BR/>
                                <label class="control-label col-md-4 col-sm-4">Nome da M&atilde;e:</label>  
                                <input class="form-control input-lg" type="text" id="Nome_mae" name="Nome_mae" value="<?=$nome_mae?>" required="required" placeholder="Informe o nome da mãe" data-parsley-required="true"  /> 

                                <BR/>                           
                                <BR/>

                                 <label class="control-label col-md-4 col-sm-4">Nome do Pai:</label> 
                                <input class="form-control input-lg" type="text" id="Nome_pai" name="Nome_pai" value="<?=$nome_pai?>" required="required" placeholder="Informe o nome do pai" data-parsley-required="true"  /> 

                                <BR/>                           
                                <BR/>
                                
                                <label class="control-label col-md-4 col-sm-4">E-mail:</label>  
                                <input class="form-control input-lg" id="Email" name="Email" type="email" required="required" class="input-text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?=$email?>" placeholder="Informe o e-mail do usuário" data-parsley-required="true"  /> 

                                <input class="form-control input-lg" type="hidden" id="id" name="id" value="<?=base64_encode($id)?>" />

                                <BR/>                           
                                <BR/>
<?php
                                $d      = explode('-',$data);
                                $dx     = explode(' ',$d[2]);
                                $data   = $dx[0].'/'.$d[1].'/'.$d[0];
?>

                                <label class="control-label col-md-4 col-sm-4">Data:</label>    
                                <input class="form-control form-control2 input-lg" type="text"" id="Data" name="Data" value="<?=$data?>" required="required"  data-parsley-required="true"  /> 

                                <BR/>                           
                                <BR/>
                                <label class="control-label col-md-4 col-sm-4">Status:</label>
                                  
                                <select class="form-control input-lg" name="status">
                                    <option value="1" <?=($status == 1 ? 'selected' : '');?>>Ativo</option>
                                    <option value="0" <?=($status == 0 ? 'selected' : '');?>>Inativo</option> 
                                </select>                    
                                
                                <label class="control-label col-md-4 col-sm-4"></label>

                                <div class="col-md-9 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Gravar</button>
                                    <a href="<?php echo base_url() ?>index.php/usuarios"><button type="button" class="btn btn-primary " >Voltar</button></a>
                                   
                                    
                                </div>                              
                            
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
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
    <script src="<?php echo base_url()?>plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="<?php echo base_url()?>plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?php echo base_url()?>plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url()?>plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url()?>plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?php echo base_url()?>js/apps.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.maskedinput.min.js"></script>

    <!-- ================== END PAGE LEVEL JS ================== --> 
    
    <script src="<?php echo base_url()?>plugins/lightbox/js/lightbox-2.6.min.js"></script>
    <script src="<?php echo base_url()?>js/gallery.demo.min.js"></script>
    
    <script src="<?php echo base_url()?>js/jquery.fancybox-1.3.1.js" type="text/javascript"></script>

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  
    <script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.min.js"></script>

    <script src="<?php echo base_url()?>js/datepicker.js"></script>
    <script src="<?php echo base_url()?>js/jquery.mobile.datepicker.js"></script>

    <script>

        $(document).ready(function() {
            App.init();         


            $( ".form-control2" ).datepicker({
                dateFormat: 'dd/mm/yy',
                minDate: 0,
                startDate: '+1d',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
            });

        });

    </script>

   

</body>
</html>
