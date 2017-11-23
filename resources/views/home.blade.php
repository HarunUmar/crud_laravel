@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row">
            @php $id = 1
            <form action="{{Route('search')}}" method="get">

            <div class="col-lg-10">
                    <h1 class="page-header"></h1>  
                     <input type="text" name="key" class="form-control form-lg" placeholder="Search...">
                </div>
                
                  <div class="col-lg-2">
                 <h1 class="page-header"></h1>  
                    <button type="submit" class="btn btn-primary btn"> Cari</button>
                </div>

            </form>
              
                
            </div>
            <hr>
            <!-- /.row -->
            
            <div class="row">
                
                <div class="col-lg-12">

                   @if(!empty($result))
                     @include('layouts.errors')
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="page-header" align="center">{{$head}}</h1>  
                            <div class="panel-heading">
                            <button type="submit" data-toggle="modal" class="btn btn-success btn-lg" data-target="#add-modal"> Add</button>
                        </div>

                        <!-- /.panel-heading -->
                      
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                           
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Id Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Tanggal Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @php $no = 1
                                    @foreach($result as $data)
                                    
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$data->id_barang}}</td>
                                            <td>{{$data->nama_barang}}</td>
                                            <td>{{$data->jenis_barang}}</td>
                                            <td>{{$data->tanggal_masuk}}</td>
                                            <td>
                                            <a href="{{url('show/'.$data->id_barang)}}">  <button class="btn btn-primary">Edit</button></a>

                                            <a href="javascript:void();" data-toggle="modal" onclick="DestroyBarang('{{$data->id_barang}}');"  data-target="#delete-modal"><button class="btn btn-danger">Delete</button></a>

                                          </td>

                                        </tr>

                                       <input type="hidden" id="id_barang_value-{{$no}}" value="{{$data->id_barang}}">
                              
                                    @php $no++   
                                    @endforeach


                                       
                                    </tbody>

                                </table>
                               
                            </div>
  <div class="centered">
                                         {{$result->links()}}
                                      </div> 
                            <!-- /.table-responsive -->
                        </div>
                         @else 
                                    <p>tidak ada data</p>

                                @endif
                              
      
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
           </div>

           @include('modal.add')
      
           @include('modal.delete')
      
  

<script>
    function DestroyBarang(no){
    $("#data-id-barang").val(no);
    }
</script>

@stop