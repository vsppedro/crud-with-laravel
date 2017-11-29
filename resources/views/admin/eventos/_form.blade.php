<input type="hidden" name="usuario_id" value="{{Auth::user()->id}}"/>

<div class="input-field">
  <input required type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
  <label>Título</label>
</div>

<div class="input-field">
  <input required type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
  <label>Descrição</label>
</div>

<div class="input-field">
  <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
  <label>Valor</label>
</div>

<div class="file-field  input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input required type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
@if(isset($registro->imagem))
<div class="input-field">
  <img width="150" src="{{asset($registro->imagem)}}" />
</div>
@endif

<div class="file-field  input-field">
  <input required type="text" class="datepicker" name="data" value="{{isset($registro->data) ? $registro->data : ''}}">
  <label>Data</label>
</div>