<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
             
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <ul class="to_do">
                <li><a href="#" id="menu">Beranda</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Dokter</a></li>
                <li><a href="#">Berita</a> </li>
                <li><a href="#">Galeri</a> </li>
                <?php foreach($navigation->result() as $nav){ ?>
                  <li>
                    <a href="#" id="nav-item" type="button" data-toggle="collapse" data="<?php echo $nav->id_navigation; ?>" data-target="#<?php echo $nav->link; ?>" aria-expanded="false"aria-controls="contentId" style="margin-bottom: 9px;"><?php echo $nav->title; ?></a>
                    <a href="<?php echo base_url('admin/halaman/delete_nav/').$nav->id_navigation; ?>" class="btn btn-danger btn-xs pull-right hapus"><i class="fa fa-trash"></i></a>
                    <a href="<?php echo base_url('admin/halaman/update_nav/').$nav->id_navigation; ?>" class="btn btn-success btn-xs pull-right"><i class="fa fa-edit"></i></a>
                    
                    <div class="collaps" id="<?php echo $nav->link; ?>" style="margin-top: 20px">
                      <ul class="list-group">
                        <?php 
                        $navigasi = $nav->id_navigation;
                        $this->db->where('id_navigation', $navigasi);
                        $statis = $this->db->get('static_pages');
                        ?>
                        <?php foreach($statis->result() as $row){ ?>
                          <li class="list-group-item d-flex justify-content-between align-items-center" style="text-transform: uppercase; border:0px;">
                            <i class="fa fa-chevron-right"></i> <?php echo $row->title_pages; ?>
                            <a href="<?php echo base_url('admin/halaman/delete_page/').$row->id_static_pages; ?>" class="btn btn-danger btn-xs pull-right hapus"><i class="fa fa-trash"></i></a>
                            <a href="<?php echo base_url('admin/halaman/edit_page/').$row->id_static_pages; ?>" class="btn btn-success btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                          </li>
                        <?php } ?>
                        <a href="<?php echo base_url('admin/halaman/add_pages/').$nav->id_navigation; ?>" class="btn btn-link btn-xs"><i class="fa fa-plus"></i> Tambah Halaman</a>
                      </ul>
                    </div>
                  </li>
                <?php } ?>
                              <a href="<?= base_url('admin/navigation/add'); ?>" class="btn btn-link"><i class="fa fa-plus"></i> TAMBAH NAVIGASI</a>

                <li  style="border-left: 2px solid green;  border-radius: 0px;"><a href="">Info Karir</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $this->load->view('admin/master/footer'); ?>
<?php $this->load->view('admin/swall'); ?>