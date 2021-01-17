@extends('templateadmin.admin')

@section('content')
<h2 style="text-align: center;">Halaman Produk</h2>
<div class="product-status mg-tb-15">
  <div class="container-fluid">
    <div class="add-product">
      <button><a href="#">Tambah Produk</a></button>
    </div><br>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Product Title</th>
          <th scope="col">Status</th>
          <th scope="col">Purchases</th>
          <th scope="col">Product sales</th>
          <th scope="col">Stock</th>
          <th scope="col">Price</th>
          <th scope="col">Setting</th>
        </tr>
      </thead>
      <tbody>
        <tr>

        </tr>
        <tr>
          <td><img src="{{url('public')}}/assets/images/products/p6_hover.jpg" style="width: 100px;"></td>
          <td>Jewelery Title 1</td>
          <td>
            <button class="pd-setting">Active</button>
          </td>
          <td>50</td>
          <td>$750</td>
          <td>Out Of Stock</td>
          <td>$15</td>
          <td>
            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed bg-danger"><i class="fa fa-trash-o text-danger bg-danger" aria-hidden="true"></i></button>
          </td>
        </tr>
        <tr>
          <td><img src="{{url('public')}}/assets/images/products/p5.jpg" style="width: 100px;"></td>
          <td>Jewelery Title 2</td>
          <td>
            <button class=" ps-setting">Paused</button>
          </td>
          <td>60</td>
          <td>$1020</td>
          <td>In Stock</td>
          <td>$17</td>
          <td>
            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
          </td>
        </tr>
        <tr>
          <td><img src="{{url('public')}}/assets/images/products/p4.jpg" style="width: 100px;"></td>
          <td>Jewelery Title 3</td>
          <td>
            <button class=" ds-setting">Disabled</button>
          </td>
          <td>70</td>
          <td>$1050</td>
          <td>Low Stock</td>
          <td>$15</td>
          <td>
            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
          </td>
        </tr>
        <tr>
          <td><img src="{{url('public')}}/assets/images/products/p3.jpg" style="width: 100px;"></td>
          <td>Jewelery Title 4</td>
          <td>
            <button class=" pd-setting">Active</button>
          </td>
          <td>120</td>
          <td>$1440</td>
          <td>In Stock</td>
          <td>$12</td>
          <td>
            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
          </td>
        </tr>
        <tr>
          <td><img src="{{url('public')}}/assets/images/products/p1.jpg" style="width: 100px;"></td>
          <td>Jewelery Title 5</td>
          <td>
            <button class=" pd-setting">Active</button>
          </td>
          <td>30</td>
          <td>$540</td>
          <td>Out Of Stock</td>
          <td>$18</td>
          <td>
            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
          </td>
        </tr>
        <tr>
          <td><img src="{{url('public')}}/assets/images/products/p2.jpg" style="width: 100px;"></td>
          <td>Jewelery Title 6</td>
          <td>
            <button class=" ps-setting">Paused</button>
          </td>
          <td>400</td>
          <td>$4000</td>
          <td>In Stock</td>
          <td>$10</td>
          <td>
            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="custom-pagination">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection