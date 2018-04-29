$(document).ready(function(){
  
  $("#div_erro_captcha").hide();
  $("#erro_marca").hide();

  $("#form_tenho_interesse").on('submit',function(e){
    // Evita o autosubmit. 
    e.preventDefault();    
 
    var interesse   = $("#form_tenho_interesse input[name='txt_interesse_em']:checked").val();
    var modelo      = $("#form_tenho_interesse input[name='op_modelo_carro']:checked").val();
    var cpf         = $("#txt_cpf").val();
    var celular     = $("#txt_celular").val();
    var email       = $("#txt_email").val();
    var cd_unidade  = "";
    var unidade     = $("#slUnidade").val();
    var opt_mail    = "";
    var opt_fone    = "";
    
    var marca_carro = $("#txt_marca_carro").val();

    if (marca_carro == "") {

      $("#erro_marca").focus(); 
      $("#erro_marca").show();

      $('html, body').animate({
            scrollTop: $('#erro_marca').position().top
        }, 'fast');

      window.setTimeout( function(){
        $("#erro_marca").hide();
      }, 3000);
      return false;

    }    

    var marca_carro = marca_carro + ' '  + modelo;    
    
    if($('#rb_contato_por_telefone').is(':checked')){      
      var opt_mail = "0";
      var opt_fone  = "1";

    }else{
      var opt_mail = "1";
      var opt_fone  = "0";
    }
    
    var ref = interesse + ' - ' + marca_carro;

    if (unidade == "Alphaville"){
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

    if (grecaptcha.getResponse() != ""){
     
     form = 
          {
            
            'retURL'                  : 'http://www.honda.com.br/Paginas/default.aspx',
            'first_name'              : $("#txt_nome").val(),
            'last_name'               : ' ',
            'cpf__c'                  : cpf,
            'mobile'                  : celular,
            'email'                   : email,                        
            'type__c'                 : 'HAB',            
            'Lead_Source'             : 'Website Concessionaria',
            'sub_source_media__c'     : 'Site',
            'dealer_code_interest__c' : cd_unidade,                
            'opt_in_email__c'         : opt_mail, 
            'opt_in_phone__c'         : opt_fone, 
            'model_interest__c'       : ref
          };             


         $.ajax({
          type : "POST",
          data : form,
          contentType: "application/x-www-form-urlencoded",
          url: "/curll",
          success: function(retorno){
            
            $("#id01").show();
            console.log(retorno);

            // if (retorno =='<span style="color: red;"> Sua solicitação foi enviada com sucesso! </span>'){

            //   $("#id-12").html('<div>  <span style="color: red; font-size: 18px; position: relative; top:0px; margin-left:20px;  "> Sua solicitação foi enviada com sucesso! </span></div>');

            // } else {

            //   $("#erros_proposta").html(retorno);

            // }

          },
          error: function(XMLHttpRequest, textStatus, errorThrown){
              alert("Erro!");
          }
          }); // Fim do Ajax
    

    return;

    }else{

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

