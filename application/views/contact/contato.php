<div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    
                    
                    <h2 class="section-heading">Entre em contato.
                        <br>Apresente sua duvida.</h2>
                    <p class="lead">Não esqueça um detalhe, precisamos saber de tudo.</p>
                
                
                </div>
                
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <?php
                    $alinhamento = array(
                        'class' => 'intro-heade'
                    );                              
                    
                     
$sub = array('value' => 'Enviar','name' => 'submit','type' => 'submit',
'class' => 'btn btn-default');
$inp = array('type' => 'hidden','name' => 'submitted', 'value' => 'true');                    


                    
                    echo form_open('',$alinhamento);                 
                    
                   echo "<input type='text' class='form-control'
                       id='nome' placeholder='Maria Cristina' required/>";
                   echo "<p/><p/>";
                    
                   echo "<input type='text' class='form-control'
                       id='sobrenome' placeholder='Rocha Lima' required/>";
                   echo "<p/><p/>";
                   
                   
		   echo "<input type='email' class='form-control'
                       id='email' placeholder='user@provedor.com' required/>";
                   echo "<p/><p/>";
                   
                   echo "<textarea class='form-control' rows='5' id='mensagem'
                       placeholder='Olá eu gostaria de uma informação sobre a forma de pagamento dos projetos.' required>";
                   echo "</textarea>";
                   
                                              
                echo "<div class='control-group'>";
                echo "<div class='controls'>";
		echo form_submit($sub);
                echo form_input($inp);
                echo "</div>";
                echo "</div>";
                
           
	echo form_fieldset_close(); 
echo form_close();
      
                    ?>
 
    
                
                
                </div>
                
                
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->       
    
    
    
   