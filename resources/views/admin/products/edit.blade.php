@component('admin.layouts.elements.body')
    @slot('title') Produtos @endslot
    @slot('description') Edição de Produto @endslot

    <form action="{{ route('products.update', $product->id) }}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('admin.products.form');
    </form>

    <a href="{{ route('products.show', $product->id) }}" class="btn btn-xs btn-default">Voltar</a>
@endcomponent