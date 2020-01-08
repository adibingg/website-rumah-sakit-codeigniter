<?php $this->load->view('home/nav'); ?>
<?php $this->load->view('home/bread'); ?>
		<section class="ftco-section" style="margin-top: -100px;">
    	<div class="container">
    		<div class="ftco-departments">
					<div class="row">
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row">
                  <?php foreach($career->result() as $row){ ?>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                      <div class="card" style="margin-bottom: 10px;">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row->position; ?></h5>
                            <hr>
                            <h5 class="card-title">Kualifikasi</h5>
                            <style>
                              ol li{
                                font-size: 10pt;
                                margin-left: -23px;
                              }
                            </style>
                            <p style="font-size: 1pt; margin-top: -13pt;"><?php echo $row->qualification; ?></p>
                            <h5 class="card-title">Persyaratan</h5>
                            <p style="font-size: 1pt; margin-top: -13pt;"><?php echo $row->requirements; ?></p>
                          </div>
                          <div class="card-footer text-center">
                            <a href="mailto:rumahsakitkartini@yahoo.com" class="btn btn-primary"><i class="fa fa-envelope"></i> Apply</a>
                            <a href="mailto:rumahsakitkartini@yahoo.com" class="btn btn-primary"><i class="fa fa-share"></i> Share</a>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
	        </div>
        </div>
    	</div>
    </section>
<?php $this->load->view('home/footer'); ?>