<div id="delete-modal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">
							Konfirmasi
						</h4>
					</div>
					<div class="modal-body" >
					<form action="{{url('destroy')}}" method="post" > 
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden"  name ="id_barang" id="data-id-barang">
						
					Apakah anda yakin ingin menghapus data ini?

					<div class="modal-footer">
					
						<button type="submit" class="btn btn-primary" id="btn-hapus-kendaraan">Ya</button>
						
						<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
					</div>
						</form>	
					</div>
					
				</div>
			</div>
		</div>