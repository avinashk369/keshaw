@extends('header.meta_data')
@section('title', 'Register')
@section('content')
      <div class="content">
      
        <div class="row">
        <div class="col-md-12">
                    <a class="btn btn-success float-right" href="{{url('addProduct')}}" role="button">Add new product</a>
                </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"> Products</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table id="myTable">  
        <thead>  
          <tr>  
            <th>ENO</th>  
            <th>EMPName</th>  
            <th>Country</th>  
            <th>Salary</th>  
          </tr>  
        </thead>  
        <tbody>  
        
        
        @foreach($products[0] as $prd)
           @if(!is_null($prd['name']))
            <tr>  
            <td>{{$prd['name']}}</td>  
            <td>Anusha</td>  
            <td>India</td>  
            <td>10000</td>  
          </tr>  
          @endif
        @endforeach
          
          
        </tbody>  
      </table> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{asset('public/assets/js/core/jquery.min.js')}}"></script>
      
  <script>
    $(document).ready(function() {
      $('#myTable').dataTable();
    } );
  </script>
@endsection
    