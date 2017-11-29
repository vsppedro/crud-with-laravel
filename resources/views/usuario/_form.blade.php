@if(Auth::guest())
<div class="row">
  <div class="input-field col s6">
    <input required type="text" name="name" value="{{isset($registro->name) ? $registro->name : ''}}">
    <label>Nome</label>
  </div>
  <div class="input-field col s6">
    <input required type="text" name="lastname" value="{{isset($registro->lastname) ? $registro->lastname : ''}}">
    <label>Sobrenome</label>
  </div>
</div>

<div class="input-field">
  <input required type="text" name="login" value="{{isset($registro->login) ? $registro->login : ''}}">
  <label>Login</label>
</div>

<div class="input-field">
  <input required type="text" name="cpfcnpj" value="{{isset($registro->cpfcnpj) ? $registro->cpfcnpj : ''}}">
  <label>CPF/CNPJ</label>
</div>

<div class="input-field">
  <input required type="email" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
  <label>E-mail</label>
</div>

@else
<div class="row">
  <div class="input-field col s6">
    <input  type="text" name="name" value="{{isset($registro->name) ? $registro->name : ''}}">
    <label>Nome</label>
  </div>
  <div class="input-field col s6">
    <input  type="text" name="lastname" value="{{isset($registro->lastname) ? $registro->lastname : ''}}">
    <label>Sobrenome</label>
  </div>
</div>

<div class="input-field">
  <input disabled  type="text" name="login" value="{{isset($registro->login) ? $registro->login : ''}}">
  <label>Login</label>
</div>

<div class="input-field">
  <input  type="text" name="cpfcnpj" value="{{isset($registro->cpfcnpj) ? $registro->cpfcnpj : ''}}">
  <label>CPF/CNPJ</label>
</div>

<div class="input-field">
  <input disabled  type="email" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
  <label>E-mail</label>
</div>

@endif

<div class="input-field">
  <input type="text" name="telefone" value="{{isset($registro->telefone) ? $registro->telefone : ''}}">
  <label>Telefone</label>
</div>

<div class="row">
  <div class="input-field col s6">
    <input type="password" name="password">
    <label>Senha</label>
  </div>
  <div class="input-field col s6">
    <input type="password" name="confpassword">
    <label>Confirmar senha</label>
  </div>
</div>