@include('includes.cabecalho')

    <div id="container">

       <div id="conteudo">

      
       
              <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="usuario"> 
          
          @csrf
          
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Sua senha</label>
            <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="/cadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
   

       </form>
        

       </div><!-- conteudo -->
    </div><!-- container -->

    
@include('includes.rodape')