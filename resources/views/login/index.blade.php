@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    
    <div class="container">
        <div class="section"></div>
        <main>
        <center>
          <h5>Por favor, insira os seus dados</h5>
          <div class="section"></div>
        
          <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
        
              <form class="col s12" action="{{route('site.login.entrar')}}" method="post">
                {{ csrf_field() }}
                
                <div class='row'>
                  <div class='col s12'>
                  </div>
                </div>
        
                <div class='row'>
                  <div class='input-field col s12'>
                    <input class='validate' type='email' name='email'/>
                    <label for='email'>E-mail</label>
                  </div>
                </div>
        
                <div class='row'>
                  <div class='input-field col s12'>
                    <input class='validate' type='password' name='senha'/>
                    <label for='password'>Senha</label>
                  </div>
                  <label style='float: right;'>
        	          <a class='pink-text' href='#!'><b>Esqueceu a senha?</b></a>
        		  </label>
                </div>
        
                <br />
                <center>
                  <div class='row'>
                    <button class='col s12 btn btn-large waves-effect deep-orange'>Entrar</button>
                  </div>
                </center>
              </form>
            </div>
          </div>
          <a href="#!">Criar conta</a>
        </center>
    
        <div class="section"></div>
        <div class="section"></div>
    </main>
    </div>

@endsection

