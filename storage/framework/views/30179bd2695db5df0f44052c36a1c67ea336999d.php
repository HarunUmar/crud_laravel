<?php $__env->startSection('content'); ?>
<div class="container">
            <div class="row">
            <?php  $id = 1; ?>
            <form action="<?php echo e(Route('search')); ?>" method="get">

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

                   <?php if(!empty($result)): ?>
                     <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="page-header" align="center"><?php echo e($head); ?></h1>  
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

                                    <?php  $no = 1; ?>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                        <tr>
                                            <td><?php echo e($no); ?></td>
                                            <td><?php echo e($data->id_barang); ?></td>
                                            <td><?php echo e($data->nama_barang); ?></td>
                                            <td><?php echo e($data->jenis_barang); ?></td>
                                            <td><?php echo e($data->tanggal_masuk); ?></td>
                                            <td>
                                            <a href="<?php echo e(url('show/'.$data->id_barang)); ?>">  <button class="btn btn-primary">Edit</button></a>

                                            <a href="javascript:void();" data-toggle="modal" onclick="DestroyBarang('<?php echo e($data->id_barang); ?>');"  data-target="#delete-modal"><button class="btn btn-danger">Delete</button></a>

                                          </td>

                                        </tr>

                                       <input type="hidden" id="id_barang_value-<?php echo e($no); ?>" value="<?php echo e($data->id_barang); ?>">
                              
                                    <?php  $no++   ; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                       
                                    </tbody>

                                </table>
                               
                            </div>
  <div class="centered">
                                         <?php echo e($result->links()); ?>

                                      </div> 
                            <!-- /.table-responsive -->
                        </div>
                         <?php else: ?> 
                                    <p>tidak ada data</p>

                                <?php endif; ?>
                              
      
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
           </div>

           <?php echo $__env->make('modal.add', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
           <?php echo $__env->make('modal.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
  

<script>
    function DestroyBarang(no){
    $("#data-id-barang").val(no);
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>