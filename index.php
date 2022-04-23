<?php
include "page/header.php";
include "page/koneksi.php";
?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#txtcari").keyup(function() {
			var strcari = $("#txtcari").val();
			if (strcari != "") {
				$("#hasil").html("<div align='center'><img src='assets/img/loading.gif'/></div>")
				$.ajax({
					type: "post",
					url: "cari.php",
					data: "q=" + strcari,
					success: function(data) {
						$("#hasil").html(data);
					}
				});
			}
		});
	});
</script>

<div class="container">
	<section class="content">
		<div class="container-fluid">
			<h2 class="text-center display-4">Pencarian Dokumen</h2>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<form action="/action_page.php">
						<div class="input-group">
							<input type="text" class="form-control form-control-lg" id='txtcari' name='textcari' placeholder="Masukkan Nomor SPP/SPM/SP2D atau Uraian ">
							<div class="input-group-append">
								<button type="submit" class="btn btn-lg btn-default">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>

<div id='hasil'></div>