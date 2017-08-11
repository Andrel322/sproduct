@component('admin.layouts.elements.body')
    @slot('title') Produtos @endslot
    @slot('description') Administração de produtos @endslot

    <a href="{{ route('products.create') }}" class="btn btn-default">Novo Produto</a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Unidade de Medida</th>
            <th class="text-right">Visualizar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nome }}</td>
                <td>{{ $product->descricao }}</td>
                <td>{{ $product->unidadeM }}</td>
                <td class="text-center">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

@endcomponent