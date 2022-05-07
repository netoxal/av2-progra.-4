@include('includes.cabecalho')

    <div id="container">

       <div id="conteudo">


       
              <!--FORMULÁRIO DE CADASTRO-->
              
              <div id="cadastro">

              <form action="enviacadastro.php" method="post">

                  
                <h1>Cadastro</h1> 
                   
                  <p> 
                    <label for="nome_cad">Seu nome</label>
                    <input id="nome_cad" name="nome" required="required" type="text" placeholder="nome" />
                  </p>
                   
                  <p> 
                    <label for="email_cad">Seu e-mail</label>
                    <input id="email_cad" name="email" required="required" type="email" placeholder="contato@gmail.com"/> 
                  </p>

                  <p> 
                    <label for="senha_cad">Sua senha</label>
                    <input id="senha_cad" name="senha" required="required" type="password" placeholder="ex. 1234"/>
                  </p>
                   
                  <p> 
                    <input type="submit" value="Cadastrar"/> 
                  </p>
                   
                  <p class="link">  
                    Já tem conta?
                    <a href="cadastro/login"> Ir para Login </a>
                  </p>
                </form>
                
              </div>
   

       </form>


       

       </div><!-- conteudo -->
    </div><!-- container -->


@include('includes.rodape')