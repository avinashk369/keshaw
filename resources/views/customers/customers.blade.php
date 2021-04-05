@extends('header.meta_data')
@section('title', 'Register')
@section('content')
      <div class="content">
      
        <div class="row">
        <div class="col-md-12">
                    <a class="btn btn-success float-right" href="{{url('addCustomer')}}" role="button">Add new customer</a>
                </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"> Customers</h5>
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
            <th >Action</th>  
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
            <td style="text-align: center;">
                <i class="nc-icon nc-refresh-69"></i>
                <i class="nc-icon nc-simple-remove"></i>
            </td>  
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
      $('#myTable').dataTable({
        "columnDefs": [
    { "orderable": false, "targets": 4 }
  ]
      });
    } );
  </script>
@endsection
    