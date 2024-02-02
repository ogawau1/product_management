@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h2>商品一覧</h2></div>

                    <div class="card-body">
                        <div class="search mt-5">
                            
                        
                            <form action="{{ route('products.index') }}" method="GET" class="row g-3">

                                <div class="col-sm-12 col-md-3">
                                    <input type="text" name="search" class="form-control" placeholder="検索キーワード" value="{{ request('search') }}">
                                </div>

                                <div class="col-sm-12 col-md-3">
                            <select name="company_id" data-toggle="select" class="form-control">
                                <option value="">メーカー名</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}" {{ request('company_id') == $company->id ? 'selected' : '' }}>
                                        {{ $company->company_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                <div class="col-sm-12 col-md-2">
            <button class="btn btn-outline-secondary" type="submit">検索</button>
        </div>
    </form>
</div>

    <div class="products mt-5">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>ID.</th>
                    <th>商品画像</th>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>在庫数</th>
                    <th>メーカー名</th>
                    <th><a href="{{ route('products.create') }}" class="btn btn-success">新規登録</a></th>
                </tr>
            </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->company_id }}.</td>
                <td><img src="{{ asset($product->img_path) }}" alt="商品画像" width="100"></td>
                <td>{{ $product->product_name }}</td>
                <td>￥{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->company->company_name }}</td>
                <td>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm mx-1">詳細</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mx-1">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach

            </tbody>
        </table>
    </div>

    {{ $products->appends(request()->query())->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
