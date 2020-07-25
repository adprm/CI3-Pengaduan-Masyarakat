<div class="container report" data-aos="fade-up" data-aos-duration="1000">
    <form action="<?php echo site_url('welcome/add') ?>" method="post" enctype="multipart/form-data" data-aos="fade-UP">
        <div class="form-row pt-4">
            <!-- nik -->
            <div class="form-group col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <input type="number" class="form-control <?php echo form_error('report_nik') ? 'is-invalid':'' ?>" 
                name="report_nik" placeholder="Ketik NIK Anda *">
                <div class="invalid-feedback">
                    <?php echo form_error('report_nik') ?>
                </div>
            </div>
            <!-- name -->
            <div class="form-group col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <input type="text" class="form-control <?php echo form_error('report_name') ? 'is-invalid':'' ?>" 
                name="report_name" placeholder="Ketik Nama Anda *">
                <div class="invalid-feedback">
                    <?php echo form_error('report_name') ?>
				</div>
            </div>
        </div>
        <!-- RT RW -->
        <div class="form-row">
            <div class="form-group col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <input type="number" class="form-control <?php echo form_error('report_rt') ? 'is-invalid':'' ?>" 
                name="report_rt" placeholder="RT *">
                <div class="invalid-feedback">
					<?php echo form_error('report_rt') ?>
				</div>
            </div>
            <div class="form-group col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <input type="number" class="form-control <?php echo form_error('report_rw') ? 'is-invalid':'' ?>" 
                name="report_rw" placeholder="RW *">
                <div class="invalid-feedback">
					<?php echo form_error('report_rw') ?>
				</div>
            </div>
        </div>
        <!-- title -->
        <div class="form-group" data-aos="fade-up" data-aos-duration="1000">
            <input type="text" class="form-control <?php echo form_error('report_title') ? 'is-invalid':'' ?>" 
            name="report_title" placeholder="Ketik Judul Laporan *">
            <div class="invalid-feedback">
				<?php echo form_error('report_title') ?>
			</div>
        </div>
        <!-- desc -->
        <div class="form-group" data-aos="fade-up" data-aos-duration="1000">
            <textarea class="form-control <?php echo form_error('report_desc') ? 'is-invalid':'' ?>"
            name="report_desc" rows="6" placeholder="Ketik Isi Laporan Anda... *"></textarea>
            <div class="invalid-feedback">
            	<?php echo form_error('report_desc') ?>
            </div>
        </div>
        <!-- date -->
        <div class="form-group" data-aos="fade-up" data-aos-duration="1000">
            <label for="report_date" class="text-white">Pilih Tanggal Kejadian *</label>
            <input class="form-control <?php echo form_error('report_date') ? 'is-invalid':'' ?>"
             type="date" name="report_date" min="0" placeholder="Tanggal Kejadian" />
            <div class="invalid-feedback">
            	<?php echo form_error('report_date') ?>
            </div>
        </div>
        <!-- file -->
        <div class="form-group text-white" data-aos="fade-up" data-aos-duration="1000">
            <label for="report_file">Lampiran (Opsional)</label>
            <input class="form-control-file <?php echo form_error('report_file') ? 'is-invalid':'' ?>"
             type="file" name="report_file" />
            <div class="invalid-feedback">
            	<?php echo form_error('report_file') ?>
            </div>
		            </div>
        <input class="btn btn-warning mb-4" type="submit" name="btn" value="Laporkan!" data-aos="fade-up" data-aos-duration="1000" />
    </form>
</div>

<style>
    .report {
        background-color: #32a1e8;
        border-radius: 10px;
        -webkit-box-shadow: 0px 0px 36px -13px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 36px -13px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 36px -13px rgba(0, 0, 0, 0.75);
    }

    #reports {
        background-image: url('assets/bg-report.png');
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
    }
</style>