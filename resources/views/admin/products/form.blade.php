{!! csrf_field() !!}
<div class="form-group">
    <label for="title" class="control-label col-sm-2">Nome</label>
    <div class="col-sm-10">
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $product->nome ?? '' }}"
               placeholder="Nome">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">Descrição</label>
    <div class="col-sm-10">
        <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"
                  placeholder="Descrição..."> {{ $product->descricao ?? '' }} </textarea>
    </div>
</div>
<div class="form-group">
    <label for="unidadeM" class="control-label col-sm-2">Unidade de Medida</label>
    <div class="col-sm-10">
        {{  Form::select('unidadeM', Config::get('enums.unidade_medidas'), $product->unidadeM ?? '', ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="Salvar" class="btn btn-primary">
    </div>
</div>