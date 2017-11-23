<div id="add-modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">
                            <!-- Beri id "modal-title" untuk tag span pada judul modal -->
                            <span id="modal-title"></span>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <!-- Beri id "pesan-error" untuk menampung pesan error -->
                        <div id="pesan-error" class="alert alert-danger"></div>
                        
                        <!-- Beri id "form" untuk tag form -->
                        <form id="form" action="<?php echo e(url('/store')); ?>" method="post">
                    
                            <div class="form-group">
                                <label>Nama </label>
                                 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="text" class="form-control" name="nama_barang" placeholder="nama barang">
                            </div>

                            <div class="form-group">
                                <label>Jenis Barang</label>
                                <select id="jenis_barang" name="jenis_barang" class="form-control">
                                    
                                    <option value="jenis A">Jenis A</option>
                                    <option value="jenis B">Jenis B</option>

                                </select>
                            </div>

                             <div class="form-group">
                                <label>Tanggal Masuk </label>
                                <input type="date" class="form-control" name="tanggal_masuk" placeholder="tanggal_masuk">
                            </div>
                         <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        </div>
                           
                        </form>
                    </div>
                 
                </div>
            </div>
        </div>