<x-layout>
<main id="main" class="main">
<div class="pagetitle">
  <h1>Product</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Product</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="col-md-12">
        <div class="card">
            <div class="card-header left">
                <h4 class="card-title pull-left"> Product Table</h4>
                <a href="{{route('product.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add Product
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>S.N</th>
                                <th>Images</th>
                                <th>Title</th>
                                <th>Parent Category</th>
                                <th>Parent SubCategory</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $val)
                            <tr>
                                <td>{{$val->id}}</td>
                                <td> <img src="{{asset('assets/img/product/'.$val->image)}}" style="object-fit:fill;width:50px;heigth:50px"></td>
                                <td>{{$val->title}}</td>
                                <td>
                                @if($val->category_id)
                                    {{$val->category->title}}
                                    @endif
                                </td>
                                <td>
                                    @if($val->subcategory_id)
                                    {{$val->subcategory->title}}
                                    @endif
                                </td>                                
                                <td>{{$val->price}}</td>  
                                <td>{{$val->content}}</td>                                
                                <td width="20%" style="display:flex;gap:10px">
                                    <form method="POST" action="{{ route('product.destroy', $val->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <a href="{{route('product.edit' , $val->id)}}" class="btn btn-success btn-sm">
                                        <i class="bi bi-box-arrow-in-up-right"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
</x-layout>
