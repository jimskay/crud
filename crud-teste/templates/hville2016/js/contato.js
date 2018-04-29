$(document).ready(function(){
  
  $("#div_erro_captcha").hide();
  $("#erro_marca").hide();  

  $("#form_tenho_interesse").on('submit',function(e){
    // Evita o autosubmit. 
    e.preventDefault();

    var interesse    = $("#form_tenho_interesse input[name='txt_interesse_em']:checked").val(); 
    var modelo       = $("#form_tenho_interesse input[name='op_modelo_carro']:checked").val();
    var cpf          = $("#txt_cpf").val();
    var celular      = $("#txt_celular").val();
    var email        = $("#email").val();
    var cidade       = $("#cidade").val();
    var departamento = $("#departamento").val();
    var subject      = $("#subject").val();
    var txt_nome     = $("#txt_nome").val();
    var sobrenome    = $("#sobrenome").val();
    var mensagem     = $("#mensagem").val();       

    if (cidade == "Alphaville"){
      cd_unidade =  "1018701";
    }else{
      cd_unidade =  "1676059";
    }

    // Retirando caracteres especiais
    cpf = cpf.replace(/\./g,"");
    cpf = cpf.replace(/\-/g,"");
    cpf = cpf.replace(/\//g,"");

    // Retirando caracteres especiais
    celular  = celular.replace(/\(/g,"");
    celular  = celular.replace(/\)/g,"");
    celular  = celular.replace(/\-/g,"");
    celular  = celular.replace(/\ /g,"");

    if (grecaptcha.getResponse() != "") {

    } else {

      $("#div_erro_captcha").show();

      window.setTimeout( function(){
        $("#div_erro_captcha").hide();
      }, 3000);

    }

  });


	 var x=0;
	 $(".box").hide();
	 
    exibeCarro = function(carro) {

      if (carro == "Honda Fit") {
        hideAll();        
        $("#lbExl").show();  
        $("#lbEx").show();  
        $("#lbLx").show();  
        $("#lbDx").show();  
      
      }else if  (carro == "Honda WR-V") {
        hideAll();  
        $("#lbExl").show();  
        $("#lbEx").show();               
        
      }else if  (carro == "Honda HR-V") {
        hideAll();  
        $("#lbTouring").show();  
        $("#lbExl").show();         
        $("#lbEx").show();         
        $("#lbLx").show();         
      
      }else if  (carro == "Honda CR-V") {
        hideAll();  
        $("#lbElx4x4").show();          
      }else if (carro == "Honda CITY") {
        hideAll();        
        $("#lbExl").show();  
        $("#lbEx").show();  
        $("#lbLx").show();  
        $("#lbDx").show();  

      }else if (carro == "Honda CIVIC") {
        hideAll();        
        $("#lbTouring").show();  
        $("#lbExl").show();         
        $("#lbEx").show();         
        $("#lbLx").show();   
        $("#lbSport").show();   

      }else if (carro == "Honda ACCORD") {
        hideAll();        
       
        $("#lbExV6").show();   

      }
		  
      if (x==0){ 
  		
        $(".box").slideToggle();
  			x=1;

		  }
  		
  		$("#modeloCarro").html(carro);
      $("#txt_marca_carro").val(carro);

  		$("#modeloCarro").addClass('animated ' + 'fadeIn');        
      
                window.setTimeout( function(){
                    $("#modeloCarro").removeClass('animated ' + 'fadeIn');
                }, 500);
  		
  		$("#mudaversao").addClass('animated ' + 'fadeIn');        
      
                window.setTimeout( function(){
                    $("#mudaversao").removeClass('animated ' + 'fadeIn');
                }, 500);                
	  } // fim // exibeCarro = function(carro) {  
}); // fim //   $(document).ready(function(){  
	

    onValidaCPF = function (cpf){        
        
        cpf = cpf.replace(/\./g,"");
        cpf = cpf.replace(/\-/g,"");
        cpf = cpf.replace(/\//g,"");

        
        if (!valida_cpf_cnpj(cpf))
        {          
          
          $("#erro_cpf").show();
          $("#txt_cpf").val('');          

          window.setTimeout( function(){
                   $("#erro_cpf").hide();
          }, 3000);

        }

    }


    hideAll = function(){
        $("#lbElx").hide();  
        $("#lbEx").hide();  
        $("#lbLx").hide();  
        $("#lbDx").hide(); 
        $("#lbTouring").hide(); 
        $("#lbElx4x4").hide(); 
        $("#lbSport").hide(); 
        $("#lbExV6").hide(); 
    }

