<?php $__env->startSection('content'); ?>
           <div class="container">
           <div class="row">

           <div class="col-md-12 ">
                <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($head); ?></div> 

                <div class="panel-body">
    
                <form method="POST" action="<?php echo e(route('edit')); ?>" class="form-horizontal">

                <div class="form-group">
                
                <label for="name" class="col-md-4 control-label">Id Barang</label> 
                    <div class="col-md-6">
                   <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                        <input id="id_barang" type="text" name="id_barang" value="<?php echo e($result->id_barang); ?>

                    " required="required" autofocus="autofocus" class="form-control">
                    </div>
                </div> 
                
                <div class="form-group">
                <label for="name" class="col-md-4 control-label">Nama Barang</label> 
                    <div class="col-md-6">
                        <input id="name" type="text" name="nama_barang" value="<?php echo e($result->nama_barang); ?>" required="" autofocus="autofocus" class="form-control">
                    </div>
                </div> 
             
                <div class="form-group">
                      <label for="name" class="col-md-4 control-label">Nama Barang</label> 
                      <div class="col-md-6">
                        <select id="jenis_barang" name="jenis_barang" class="form-control">
                           <option value="jenis A">Jenis A</option> 
                           <option value="jenis B">Jenis B</option>
                  
                        </select>
                        </div>
                </div>
                
                 <div class="form-group">
                    <label class="col-md-4 control-label">Jenis Barang</label> 
                    <div class="col-md-6">
                        <input type="date" name="tanggal_masuk" value="<?php echo e($result->tanggal_masuk); ?>">
                    </div>
                </div>
         
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                     <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>

                </form>
                </div>
          </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>