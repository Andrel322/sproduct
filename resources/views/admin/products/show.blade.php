@component('admin.layouts.elements.body')
    @slot('title') Produtos @endslot
    @slot('description') Exibição do Produto @endslot

    <h4>{{ $product->id }} | {{ $product->nome }}</h4>
    <p>
        <small>Unidade de medida: {{ Config::get('enums.unidade_medidas')[$product->unidadeM] }}</small>
    </p>

    <p>{{ $product->descricao }}</p>

    <a href="{{ route('products.index') }}" class="btn btn-xs btn-default">Voltar</a>
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-xs btn-default">Editar</a>
    <form action="{{ route('products.destroy', $product->id) }}" class="form-horizontal" method="post" style="display: inline-block">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="btn btn-xs btn-default" value="Remover">
    </form>

@endcomponent