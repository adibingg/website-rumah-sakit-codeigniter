<?php $this->load->view('admin/master/sidebar'); ?>
<!-- page content -->
<script src="<?php echo base_url().'tinymce/'?>js/tinymce/tinymce.dev.js"></script>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
      </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                Tambah Pelayanan
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <section id="web-application">
                  <h2 class="page-header">Web Application Icons</h2>

                  <div class="row fontawesome-icon-list">



                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="adjust"><i class="fa fa-adjust"></i> fa-adjust</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="anchor"><i class="fa fa-anchor"></i> fa-anchor</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="archive"><i class="fa fa-archive"></i> fa-archive</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="area-chart"><i class="fa fa-area-chart"></i> fa-area-chart</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrows"><i class="fa fa-arrows"></i> fa-arrows</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrows-h"><i class="fa fa-arrows-h"></i> fa-arrows-h</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrows-v"><i class="fa fa-arrows-v"></i> fa-arrows-v</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="asterisk"><i class="fa fa-asterisk"></i> fa-asterisk</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="at"><i class="fa fa-at"></i> fa-at</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="car"><i class="fa fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="ban"><i class="fa fa-ban"></i> fa-ban</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="university"><i class="fa fa-bank"></i> fa-bank <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bar-chart"><i class="fa fa-bar-chart"></i> fa-bar-chart</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bar-chart"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="barcode"><i class="fa fa-barcode"></i> fa-barcode</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bars"><i class="fa fa-bars"></i> fa-bars</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="beer"><i class="fa fa-beer"></i> fa-beer</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bell"><i class="fa fa-bell"></i> fa-bell</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bell-o"><i class="fa fa-bell-o"></i> fa-bell-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bell-slash"><i class="fa fa-bell-slash"></i> fa-bell-slash</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bell-slash-o"><i class="fa fa-bell-slash-o"></i> fa-bell-slash-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bicycle"><i class="fa fa-bicycle"></i> fa-bicycle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="binoculars"><i class="fa fa-binoculars"></i> fa-binoculars</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="birthday-cake"><i class="fa fa-birthday-cake"></i> fa-birthday-cake</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bolt"><i class="fa fa-bolt"></i> fa-bolt</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bomb"><i class="fa fa-bomb"></i> fa-bomb</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="book"><i class="fa fa-book"></i> fa-book</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bookmark"><i class="fa fa-bookmark"></i> fa-bookmark</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bookmark-o"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="briefcase"><i class="fa fa-briefcase"></i> fa-briefcase</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bug"><i class="fa fa-bug"></i> fa-bug</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="building"><i class="fa fa-building"></i> fa-building</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="building-o"><i class="fa fa-building-o"></i> fa-building-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bullhorn"><i class="fa fa-bullhorn"></i> fa-bullhorn</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bullseye"><i class="fa fa-bullseye"></i> fa-bullseye</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bus"><i class="fa fa-bus"></i> fa-bus</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="taxi"><i class="fa fa-cab"></i> fa-cab <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="calculator"><i class="fa fa-calculator"></i> fa-calculator</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="calendar"><i class="fa fa-calendar"></i> fa-calendar</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="calendar-o"><i class="fa fa-calendar-o"></i> fa-calendar-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="camera"><i class="fa fa-camera"></i> fa-camera</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="camera-retro"><i class="fa fa-camera-retro"></i> fa-camera-retro</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="car"><i class="fa fa-car"></i> fa-car</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-down"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-left"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-right"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-up"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc"><i class="fa fa-cc"></i> fa-cc</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="certificate"><i class="fa fa-certificate"></i> fa-certificate</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="check"><i class="fa fa-check"></i> fa-check</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="check-circle"><i class="fa fa-check-circle"></i> fa-check-circle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="check-circle-o"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="check-square"><i class="fa fa-check-square"></i> fa-check-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="check-square-o"><i class="fa fa-check-square-o"></i> fa-check-square-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="child"><i class="fa fa-child"></i> fa-child</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="circle"><i class="fa fa-circle"></i> fa-circle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="circle-o"><i class="fa fa-circle-o"></i> fa-circle-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="circle-o-notch"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="circle-thin"><i class="fa fa-circle-thin"></i> fa-circle-thin</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="clock-o"><i class="fa fa-clock-o"></i> fa-clock-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="times"><i class="fa fa-close"></i> fa-close <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cloud"><i class="fa fa-cloud"></i> fa-cloud</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cloud-download"><i class="fa fa-cloud-download"></i> fa-cloud-download</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cloud-upload"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="code"><i class="fa fa-code"></i> fa-code</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="code-fork"><i class="fa fa-code-fork"></i> fa-code-fork</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="coffee"><i class="fa fa-coffee"></i> fa-coffee</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cog"><i class="fa fa-cog"></i> fa-cog</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cogs"><i class="fa fa-cogs"></i> fa-cogs</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="comment"><i class="fa fa-comment"></i> fa-comment</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="comment-o"><i class="fa fa-comment-o"></i> fa-comment-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="comments"><i class="fa fa-comments"></i> fa-comments</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="comments-o"><i class="fa fa-comments-o"></i> fa-comments-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="compass"><i class="fa fa-compass"></i> fa-compass</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="copyright"><i class="fa fa-copyright"></i> fa-copyright</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="credit-card"><i class="fa fa-credit-card"></i> fa-credit-card</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="crop"><i class="fa fa-crop"></i> fa-crop</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="crosshairs"><i class="fa fa-crosshairs"></i> fa-crosshairs</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cube"><i class="fa fa-cube"></i> fa-cube</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cubes"><i class="fa fa-cubes"></i> fa-cubes</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cutlery"><i class="fa fa-cutlery"></i> fa-cutlery</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tachometer"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="database"><i class="fa fa-database"></i> fa-database</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="desktop"><i class="fa fa-desktop"></i> fa-desktop</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="dot-circle-o"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="download"><i class="fa fa-download"></i> fa-download</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pencil-square-o"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="ellipsis-h"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="ellipsis-v"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="envelope"><i class="fa fa-envelope"></i> fa-envelope</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="envelope-o"><i class="fa fa-envelope-o"></i> fa-envelope-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="envelope-square"><i class="fa fa-envelope-square"></i> fa-envelope-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="eraser"><i class="fa fa-eraser"></i> fa-eraser</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="exchange"><i class="fa fa-exchange"></i> fa-exchange</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="exclamation"><i class="fa fa-exclamation"></i> fa-exclamation</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="exclamation-circle"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="exclamation-triangle"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="external-link"><i class="fa fa-external-link"></i> fa-external-link</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="external-link-square"><i class="fa fa-external-link-square"></i> fa-external-link-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="eye"><i class="fa fa-eye"></i> fa-eye</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="eye-slash"><i class="fa fa-eye-slash"></i> fa-eye-slash</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="eyedropper"><i class="fa fa-eyedropper"></i> fa-eyedropper</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="fax"><i class="fa fa-fax"></i> fa-fax</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="female"><i class="fa fa-female"></i> fa-female</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="fighter-jet"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-archive-o"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-audio-o"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-code-o"><i class="fa fa-file-code-o"></i> fa-file-code-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-excel-o"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-image-o"><i class="fa fa-file-image-o"></i> fa-file-image-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-video-o"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-pdf-o"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-image-o"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-image-o"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-powerpoint-o"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-audio-o"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-video-o"><i class="fa fa-file-video-o"></i> fa-file-video-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-word-o"><i class="fa fa-file-word-o"></i> fa-file-word-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-archive-o"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="film"><i class="fa fa-film"></i> fa-film</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="filter"><i class="fa fa-filter"></i> fa-filter</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="fire"><i class="fa fa-fire"></i> fa-fire</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="fire-extinguisher"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="flag"><i class="fa fa-flag"></i> fa-flag</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="flag-checkered"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="flag-o"><i class="fa fa-flag-o"></i> fa-flag-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bolt"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="flask"><i class="fa fa-flask"></i> fa-flask</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="folder"><i class="fa fa-folder"></i> fa-folder</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="folder-o"><i class="fa fa-folder-o"></i> fa-folder-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="folder-open"><i class="fa fa-folder-open"></i> fa-folder-open</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="folder-open-o"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="frown-o"><i class="fa fa-frown-o"></i> fa-frown-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="futbol-o"><i class="fa fa-futbol-o"></i> fa-futbol-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="gamepad"><i class="fa fa-gamepad"></i> fa-gamepad</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="gavel"><i class="fa fa-gavel"></i> fa-gavel</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cog"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cogs"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="gift"><i class="fa fa-gift"></i> fa-gift</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="glass"><i class="fa fa-glass"></i> fa-glass</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="globe"><i class="fa fa-globe"></i> fa-globe</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="graduation-cap"><i class="fa fa-graduation-cap"></i> fa-graduation-cap</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="users"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="hdd-o"><i class="fa fa-hdd-o"></i> fa-hdd-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="headphones"><i class="fa fa-headphones"></i> fa-headphones</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="heart"><i class="fa fa-heart"></i> fa-heart</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="heart-o"><i class="fa fa-heart-o"></i> fa-heart-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="history"><i class="fa fa-history"></i> fa-history</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="home"><i class="fa fa-home"></i> fa-home</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="picture-o"><i class="fa fa-image"></i> fa-image <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="inbox"><i class="fa fa-inbox"></i> fa-inbox</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="info"><i class="fa fa-info"></i> fa-info</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="info-circle"><i class="fa fa-info-circle"></i> fa-info-circle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="university"><i class="fa fa-institution"></i> fa-institution <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="key"><i class="fa fa-key"></i> fa-key</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="keyboard-o"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="language"><i class="fa fa-language"></i> fa-language</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="laptop"><i class="fa fa-laptop"></i> fa-laptop</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="leaf"><i class="fa fa-leaf"></i> fa-leaf</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="gavel"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="lemon-o"><i class="fa fa-lemon-o"></i> fa-lemon-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="level-down"><i class="fa fa-level-down"></i> fa-level-down</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="level-up"><i class="fa fa-level-up"></i> fa-level-up</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="life-ring"><i class="fa fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="life-ring"><i class="fa fa-life-buoy"></i> fa-life-buoy <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="life-ring"><i class="fa fa-life-ring"></i> fa-life-ring</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="life-ring"><i class="fa fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="lightbulb-o"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="line-chart"><i class="fa fa-line-chart"></i> fa-line-chart</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="location-arrow"><i class="fa fa-location-arrow"></i> fa-location-arrow</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="lock"><i class="fa fa-lock"></i> fa-lock</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="magic"><i class="fa fa-magic"></i> fa-magic</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="magnet"><i class="fa fa-magnet"></i> fa-magnet</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="share"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="reply"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="reply-all"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="male"><i class="fa fa-male"></i> fa-male</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="map-marker"><i class="fa fa-map-marker"></i> fa-map-marker</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="meh-o"><i class="fa fa-meh-o"></i> fa-meh-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="microphone"><i class="fa fa-microphone"></i> fa-microphone</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="microphone-slash"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="minus"><i class="fa fa-minus"></i> fa-minus</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="minus-circle"><i class="fa fa-minus-circle"></i> fa-minus-circle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="minus-square"><i class="fa fa-minus-square"></i> fa-minus-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="minus-square-o"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="mobile"><i class="fa fa-mobile"></i> fa-mobile</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="mobile"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="money"><i class="fa fa-money"></i> fa-money</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="moon-o"><i class="fa fa-moon-o"></i> fa-moon-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="graduation-cap"><i class="fa fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="music"><i class="fa fa-music"></i> fa-music</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bars"><i class="fa fa-navicon"></i> fa-navicon <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="newspaper-o"><i class="fa fa-newspaper-o"></i> fa-newspaper-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paint-brush"><i class="fa fa-paint-brush"></i> fa-paint-brush</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paper-plane"><i class="fa fa-paper-plane"></i> fa-paper-plane</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paper-plane-o"><i class="fa fa-paper-plane-o"></i> fa-paper-plane-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paw"><i class="fa fa-paw"></i> fa-paw</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pencil"><i class="fa fa-pencil"></i> fa-pencil</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pencil-square"><i class="fa fa-pencil-square"></i> fa-pencil-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pencil-square-o"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="phone"><i class="fa fa-phone"></i> fa-phone</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="phone-square"><i class="fa fa-phone-square"></i> fa-phone-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="picture-o"><i class="fa fa-photo"></i> fa-photo <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="picture-o"><i class="fa fa-picture-o"></i> fa-picture-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pie-chart"><i class="fa fa-pie-chart"></i> fa-pie-chart</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="plane"><i class="fa fa-plane"></i> fa-plane</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="plug"><i class="fa fa-plug"></i> fa-plug</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="plus"><i class="fa fa-plus"></i> fa-plus</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="plus-circle"><i class="fa fa-plus-circle"></i> fa-plus-circle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="plus-square-o"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="power-off"><i class="fa fa-power-off"></i> fa-power-off</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="print"><i class="fa fa-print"></i> fa-print</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="puzzle-piece"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="qrcode"><i class="fa fa-qrcode"></i> fa-qrcode</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="question"><i class="fa fa-question"></i> fa-question</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="question-circle"><i class="fa fa-question-circle"></i> fa-question-circle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="quote-left"><i class="fa fa-quote-left"></i> fa-quote-left</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="quote-right"><i class="fa fa-quote-right"></i> fa-quote-right</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="random"><i class="fa fa-random"></i> fa-random</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="recycle"><i class="fa fa-recycle"></i> fa-recycle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="refresh"><i class="fa fa-refresh"></i> fa-refresh</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="times"><i class="fa fa-remove"></i> fa-remove <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bars"><i class="fa fa-reorder"></i> fa-reorder <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="reply"><i class="fa fa-reply"></i> fa-reply</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="reply-all"><i class="fa fa-reply-all"></i> fa-reply-all</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="retweet"><i class="fa fa-retweet"></i> fa-retweet</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="road"><i class="fa fa-road"></i> fa-road</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="rocket"><i class="fa fa-rocket"></i> fa-rocket</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="rss"><i class="fa fa-rss"></i> fa-rss</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="rss-square"><i class="fa fa-rss-square"></i> fa-rss-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="search"><i class="fa fa-search"></i> fa-search</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="search-minus"><i class="fa fa-search-minus"></i> fa-search-minus</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="search-plus"><i class="fa fa-search-plus"></i> fa-search-plus</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paper-plane"><i class="fa fa-send"></i> fa-send <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paper-plane-o"><i class="fa fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="share"><i class="fa fa-share"></i> fa-share</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="share-alt"><i class="fa fa-share-alt"></i> fa-share-alt</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="share-alt-square"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="share-square"><i class="fa fa-share-square"></i> fa-share-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="share-square-o"><i class="fa fa-share-square-o"></i> fa-share-square-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="shield"><i class="fa fa-shield"></i> fa-shield</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="shopping-cart"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sign-in"><i class="fa fa-sign-in"></i> fa-sign-in</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sign-out"><i class="fa fa-sign-out"></i> fa-sign-out</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="signal"><i class="fa fa-signal"></i> fa-signal</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sitemap"><i class="fa fa-sitemap"></i> fa-sitemap</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sliders"><i class="fa fa-sliders"></i> fa-sliders</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="smile-o"><i class="fa fa-smile-o"></i> fa-smile-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="futbol-o"><i class="fa fa-soccer-ball-o"></i> fa-soccer-ball-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort"><i class="fa fa-sort"></i> fa-sort</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-alpha-asc"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-alpha-desc"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-amount-asc"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-amount-desc"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-asc"><i class="fa fa-sort-asc"></i> fa-sort-asc</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-desc"><i class="fa fa-sort-desc"></i> fa-sort-desc</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-desc"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-numeric-asc"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-numeric-desc"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort-asc"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="space-shuttle"><i class="fa fa-space-shuttle"></i> fa-space-shuttle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="spinner"><i class="fa fa-spinner"></i> fa-spinner</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="spoon"><i class="fa fa-spoon"></i> fa-spoon</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="square"><i class="fa fa-square"></i> fa-square</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="square-o"><i class="fa fa-square-o"></i> fa-square-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="star"><i class="fa fa-star"></i> fa-star</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="star-half"><i class="fa fa-star-half"></i> fa-star-half</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="star-half-o"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="star-half-o"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="star-half-o"><i class="fa fa-star-half-o"></i> fa-star-half-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="star-o"><i class="fa fa-star-o"></i> fa-star-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="suitcase"><i class="fa fa-suitcase"></i> fa-suitcase</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sun-o"><i class="fa fa-sun-o"></i> fa-sun-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="life-ring"><i class="fa fa-support"></i> fa-support <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tablet"><i class="fa fa-tablet"></i> fa-tablet</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tachometer"><i class="fa fa-tachometer"></i> fa-tachometer</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tag"><i class="fa fa-tag"></i> fa-tag</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tags"><i class="fa fa-tags"></i> fa-tags</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tasks"><i class="fa fa-tasks"></i> fa-tasks</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="taxi"><i class="fa fa-taxi"></i> fa-taxi</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="terminal"><i class="fa fa-terminal"></i> fa-terminal</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="thumb-tack"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="thumbs-down"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="thumbs-o-down"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="thumbs-o-up"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="thumbs-up"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="ticket"><i class="fa fa-ticket"></i> fa-ticket</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="times"><i class="fa fa-times"></i> fa-times</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="times-circle"><i class="fa fa-times-circle"></i> fa-times-circle</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="times-circle-o"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tint"><i class="fa fa-tint"></i> fa-tint</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-down"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-left"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="toggle-off"><i class="fa fa-toggle-off"></i> fa-toggle-off</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="toggle-on"><i class="fa fa-toggle-on"></i> fa-toggle-on</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-right"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-up"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="trash"><i class="fa fa-trash"></i> fa-trash</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="trash-o"><i class="fa fa-trash-o"></i> fa-trash-o</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tree"><i class="fa fa-tree"></i> fa-tree</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="trophy"><i class="fa fa-trophy"></i> fa-trophy</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="truck"><i class="fa fa-truck"></i> fa-truck</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tty"><i class="fa fa-tty"></i> fa-tty</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="umbrella"><i class="fa fa-umbrella"></i> fa-umbrella</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="university"><i class="fa fa-university"></i> fa-university</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="unlock"><i class="fa fa-unlock"></i> fa-unlock</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="unlock-alt"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="sort"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="upload"><i class="fa fa-upload"></i> fa-upload</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="user"><i class="fa fa-user"></i> fa-user</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="users"><i class="fa fa-users"></i> fa-users</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="video-camera"><i class="fa fa-video-camera"></i> fa-video-camera</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="volume-down"><i class="fa fa-volume-down"></i> fa-volume-down</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="volume-off"><i class="fa fa-volume-off"></i> fa-volume-off</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="volume-up"><i class="fa fa-volume-up"></i> fa-volume-up</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="exclamation-triangle"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="wheelchair"><i class="fa fa-wheelchair"></i> fa-wheelchair</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="wifi"><i class="fa fa-wifi"></i> fa-wifi</a>
                    </div>

                    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="wrench"><i class="fa fa-wrench"></i> fa-wrench</a>
                    </div>

                </div>

            </section>

            <section id="file-type">
              <h2 class="page-header">File Type Icons</h2>

              <div class="row fontawesome-icon-list">



                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file"><i class="fa fa-file"></i> fa-file</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-archive-o"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-audio-o"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-code-o"><i class="fa fa-file-code-o"></i> fa-file-code-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-excel-o"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-image-o"><i class="fa fa-file-image-o"></i> fa-file-image-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-video-o"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-o"><i class="fa fa-file-o"></i> fa-file-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-pdf-o"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-image-o"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-image-o"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-powerpoint-o"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-audio-o"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-text"><i class="fa fa-file-text"></i> fa-file-text</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-text-o"><i class="fa fa-file-text-o"></i> fa-file-text-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-video-o"><i class="fa fa-file-video-o"></i> fa-file-video-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-word-o"><i class="fa fa-file-word-o"></i> fa-file-word-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-archive-o"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span></a>
                </div>

            </div>

        </section>

        <section id="spinner">
          <h2 class="page-header">Spinner Icons</h2>



          <div class="row fontawesome-icon-list">



            <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="circle-o-notch"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cog"><i class="fa fa-cog"></i> fa-cog</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cog"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="refresh"><i class="fa fa-refresh"></i> fa-refresh</a>
            </div>

            <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="spinner"><i class="fa fa-spinner"></i> fa-spinner</a>
            </div>

        </div>
    </section>

    <section id="form-control">
      <h2 class="page-header">Form Control Icons</h2>

      <div class="row fontawesome-icon-list">



        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="check-square"><i class="fa fa-check-square"></i> fa-check-square</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="check-square-o"><i class="fa fa-check-square-o"></i> fa-check-square-o</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="circle"><i class="fa fa-circle"></i> fa-circle</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="circle-o"><i class="fa fa-circle-o"></i> fa-circle-o</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="dot-circle-o"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="minus-square"><i class="fa fa-minus-square"></i> fa-minus-square</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="minus-square-o"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="plus-square-o"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="square"><i class="fa fa-square"></i> fa-square</a>
        </div>

        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="square-o"><i class="fa fa-square-o"></i> fa-square-o</a>
        </div>

    </div>
</section>

<section id="payment">
  <h2 class="page-header">Payment Icons</h2>

  <div class="row fontawesome-icon-list">



    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-amex"><i class="fa fa-cc-amex"></i> fa-cc-amex</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-discover"><i class="fa fa-cc-discover"></i> fa-cc-discover</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-mastercard"><i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-paypal"><i class="fa fa-cc-paypal"></i> fa-cc-paypal</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-stripe"><i class="fa fa-cc-stripe"></i> fa-cc-stripe</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-visa"><i class="fa fa-cc-visa"></i> fa-cc-visa</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="credit-card"><i class="fa fa-credit-card"></i> fa-credit-card</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="google-wallet"><i class="fa fa-google-wallet"></i> fa-google-wallet</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paypal"><i class="fa fa-paypal"></i> fa-paypal</a>
    </div>

</div>

</section>

<section id="chart">
  <h2 class="page-header">Chart Icons</h2>

  <div class="row fontawesome-icon-list">



    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="area-chart"><i class="fa fa-area-chart"></i> fa-area-chart</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bar-chart"><i class="fa fa-bar-chart"></i> fa-bar-chart</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bar-chart"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="line-chart"><i class="fa fa-line-chart"></i> fa-line-chart</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pie-chart"><i class="fa fa-pie-chart"></i> fa-pie-chart</a>
    </div>

</div>

</section>

<section id="currency">
  <h2 class="page-header">Currency Icons</h2>

  <div class="row fontawesome-icon-list">



    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="btc"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="btc"><i class="fa fa-btc"></i> fa-btc</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="jpy"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="usd"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="eur"><i class="fa fa-eur"></i> fa-eur</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="eur"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="gbp"><i class="fa fa-gbp"></i> fa-gbp</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="ils"><i class="fa fa-ils"></i> fa-ils</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="inr"><i class="fa fa-inr"></i> fa-inr</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="jpy"><i class="fa fa-jpy"></i> fa-jpy</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="krw"><i class="fa fa-krw"></i> fa-krw</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="money"><i class="fa fa-money"></i> fa-money</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="jpy"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="rub"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="rub"><i class="fa fa-rub"></i> fa-rub</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="rub"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="inr"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="ils"><i class="fa fa-shekel"></i> fa-shekel <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="ils"><i class="fa fa-sheqel"></i> fa-sheqel <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="try"><i class="fa fa-try"></i> fa-try</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="try"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="usd"><i class="fa fa-usd"></i> fa-usd</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="krw"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="jpy"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></a>
    </div>

</div>

</section>

<section id="text-editor">
  <h2 class="page-header">Text Editor Icons</h2>

  <div class="row fontawesome-icon-list">



    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="align-center"><i class="fa fa-align-center"></i> fa-align-center</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="align-justify"><i class="fa fa-align-justify"></i> fa-align-justify</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="align-left"><i class="fa fa-align-left"></i> fa-align-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="align-right"><i class="fa fa-align-right"></i> fa-align-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bold"><i class="fa fa-bold"></i> fa-bold</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="link"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chain-broken"><i class="fa fa-chain-broken"></i> fa-chain-broken</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="clipboard"><i class="fa fa-clipboard"></i> fa-clipboard</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="columns"><i class="fa fa-columns"></i> fa-columns</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="files-o"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="scissors"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="outdent"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="eraser"><i class="fa fa-eraser"></i> fa-eraser</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file"><i class="fa fa-file"></i> fa-file</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-o"><i class="fa fa-file-o"></i> fa-file-o</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-text"><i class="fa fa-file-text"></i> fa-file-text</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="file-text-o"><i class="fa fa-file-text-o"></i> fa-file-text-o</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="files-o"><i class="fa fa-files-o"></i> fa-files-o</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="floppy-o"><i class="fa fa-floppy-o"></i> fa-floppy-o</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="font"><i class="fa fa-font"></i> fa-font</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="header"><i class="fa fa-header"></i> fa-header</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="indent"><i class="fa fa-indent"></i> fa-indent</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="italic"><i class="fa fa-italic"></i> fa-italic</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="link"><i class="fa fa-link"></i> fa-link</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="list"><i class="fa fa-list"></i> fa-list</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="list-alt"><i class="fa fa-list-alt"></i> fa-list-alt</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="list-ol"><i class="fa fa-list-ol"></i> fa-list-ol</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="list-ul"><i class="fa fa-list-ul"></i> fa-list-ul</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="outdent"><i class="fa fa-outdent"></i> fa-outdent</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paperclip"><i class="fa fa-paperclip"></i> fa-paperclip</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paragraph"><i class="fa fa-paragraph"></i> fa-paragraph</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="clipboard"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="repeat"><i class="fa fa-repeat"></i> fa-repeat</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="undo"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="repeat"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="floppy-o"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="scissors"><i class="fa fa-scissors"></i> fa-scissors</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="strikethrough"><i class="fa fa-strikethrough"></i> fa-strikethrough</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="subscript"><i class="fa fa-subscript"></i> fa-subscript</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="superscript"><i class="fa fa-superscript"></i> fa-superscript</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="table"><i class="fa fa-table"></i> fa-table</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="text-height"><i class="fa fa-text-height"></i> fa-text-height</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="text-width"><i class="fa fa-text-width"></i> fa-text-width</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="th"><i class="fa fa-th"></i> fa-th</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="th-large"><i class="fa fa-th-large"></i> fa-th-large</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="th-list"><i class="fa fa-th-list"></i> fa-th-list</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="underline"><i class="fa fa-underline"></i> fa-underline</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="undo"><i class="fa fa-undo"></i> fa-undo</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chain-broken"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></a>
    </div>

</div>

</section>

<section id="directional">
  <h2 class="page-header">Directional Icons</h2>

  <div class="row fontawesome-icon-list">



    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="angle-double-down"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="angle-double-left"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="angle-double-right"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="angle-double-up"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="angle-down"><i class="fa fa-angle-down"></i> fa-angle-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="angle-left"><i class="fa fa-angle-left"></i> fa-angle-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="angle-right"><i class="fa fa-angle-right"></i> fa-angle-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="angle-up"><i class="fa fa-angle-up"></i> fa-angle-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-circle-down"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-circle-left"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-circle-o-down"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-circle-o-left"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-circle-o-right"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-circle-o-up"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-circle-right"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-circle-up"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-down"><i class="fa fa-arrow-down"></i> fa-arrow-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-left"><i class="fa fa-arrow-left"></i> fa-arrow-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-right"><i class="fa fa-arrow-right"></i> fa-arrow-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrow-up"><i class="fa fa-arrow-up"></i> fa-arrow-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrows"><i class="fa fa-arrows"></i> fa-arrows</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrows-alt"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrows-h"><i class="fa fa-arrows-h"></i> fa-arrows-h</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrows-v"><i class="fa fa-arrows-v"></i> fa-arrows-v</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-down"><i class="fa fa-caret-down"></i> fa-caret-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-left"><i class="fa fa-caret-left"></i> fa-caret-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-right"><i class="fa fa-caret-right"></i> fa-caret-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-down"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-left"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-right"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-up"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-up"><i class="fa fa-caret-up"></i> fa-caret-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chevron-circle-down"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chevron-circle-left"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chevron-circle-right"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chevron-circle-up"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chevron-down"><i class="fa fa-chevron-down"></i> fa-chevron-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chevron-left"><i class="fa fa-chevron-left"></i> fa-chevron-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chevron-right"><i class="fa fa-chevron-right"></i> fa-chevron-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="chevron-up"><i class="fa fa-chevron-up"></i> fa-chevron-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="hand-o-down"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="hand-o-left"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="hand-o-right"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="hand-o-up"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="long-arrow-down"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="long-arrow-left"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="long-arrow-right"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="long-arrow-up"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-down"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-left"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-right"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="caret-square-o-up"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></a>
    </div>

</div>

</section>

<section id="video-player">
  <h2 class="page-header">Video Player Icons</h2>

  <div class="row fontawesome-icon-list">



    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="arrows-alt"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="backward"><i class="fa fa-backward"></i> fa-backward</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="compress"><i class="fa fa-compress"></i> fa-compress</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="eject"><i class="fa fa-eject"></i> fa-eject</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="expand"><i class="fa fa-expand"></i> fa-expand</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="fast-backward"><i class="fa fa-fast-backward"></i> fa-fast-backward</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="fast-forward"><i class="fa fa-fast-forward"></i> fa-fast-forward</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="forward"><i class="fa fa-forward"></i> fa-forward</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pause"><i class="fa fa-pause"></i> fa-pause</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="play"><i class="fa fa-play"></i> fa-play</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="play-circle"><i class="fa fa-play-circle"></i> fa-play-circle</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="play-circle-o"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="step-backward"><i class="fa fa-step-backward"></i> fa-step-backward</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="step-forward"><i class="fa fa-step-forward"></i> fa-step-forward</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="stop"><i class="fa fa-stop"></i> fa-stop</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="youtube-play"><i class="fa fa-youtube-play"></i> fa-youtube-play</a>
    </div>

</div>

</section>

<section id="brand">
  <h2 class="page-header">Brand Icons</h2>



  <div class="row fontawesome-icon-list">



    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="adn"><i class="fa fa-adn"></i> fa-adn</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="android"><i class="fa fa-android"></i> fa-android</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="angellist"><i class="fa fa-angellist"></i> fa-angellist</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="apple"><i class="fa fa-apple"></i> fa-apple</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="behance"><i class="fa fa-behance"></i> fa-behance</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="behance-square"><i class="fa fa-behance-square"></i> fa-behance-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bitbucket"><i class="fa fa-bitbucket"></i> fa-bitbucket</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="bitbucket-square"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="btc"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="btc"><i class="fa fa-btc"></i> fa-btc</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-amex"><i class="fa fa-cc-amex"></i> fa-cc-amex</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-discover"><i class="fa fa-cc-discover"></i> fa-cc-discover</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-mastercard"><i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-paypal"><i class="fa fa-cc-paypal"></i> fa-cc-paypal</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-stripe"><i class="fa fa-cc-stripe"></i> fa-cc-stripe</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="cc-visa"><i class="fa fa-cc-visa"></i> fa-cc-visa</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="codepen"><i class="fa fa-codepen"></i> fa-codepen</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="css3"><i class="fa fa-css3"></i> fa-css3</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="delicious"><i class="fa fa-delicious"></i> fa-delicious</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="deviantart"><i class="fa fa-deviantart"></i> fa-deviantart</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="digg"><i class="fa fa-digg"></i> fa-digg</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="dribbble"><i class="fa fa-dribbble"></i> fa-dribbble</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="dropbox"><i class="fa fa-dropbox"></i> fa-dropbox</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="drupal"><i class="fa fa-drupal"></i> fa-drupal</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="empire"><i class="fa fa-empire"></i> fa-empire</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="facebook"><i class="fa fa-facebook"></i> fa-facebook</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="facebook-square"><i class="fa fa-facebook-square"></i> fa-facebook-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="flickr"><i class="fa fa-flickr"></i> fa-flickr</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="foursquare"><i class="fa fa-foursquare"></i> fa-foursquare</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="empire"><i class="fa fa-ge"></i> fa-ge <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="git"><i class="fa fa-git"></i> fa-git</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="git-square"><i class="fa fa-git-square"></i> fa-git-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="github"><i class="fa fa-github"></i> fa-github</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="github-alt"><i class="fa fa-github-alt"></i> fa-github-alt</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="github-square"><i class="fa fa-github-square"></i> fa-github-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="gittip"><i class="fa fa-gittip"></i> fa-gittip</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="google"><i class="fa fa-google"></i> fa-google</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="google-plus"><i class="fa fa-google-plus"></i> fa-google-plus</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="google-plus-square"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="google-wallet"><i class="fa fa-google-wallet"></i> fa-google-wallet</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="hacker-news"><i class="fa fa-hacker-news"></i> fa-hacker-news</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="html5"><i class="fa fa-html5"></i> fa-html5</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="instagram"><i class="fa fa-instagram"></i> fa-instagram</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="ioxhost"><i class="fa fa-ioxhost"></i> fa-ioxhost</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="joomla"><i class="fa fa-joomla"></i> fa-joomla</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="jsfiddle"><i class="fa fa-jsfiddle"></i> fa-jsfiddle</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="lastfm"><i class="fa fa-lastfm"></i> fa-lastfm</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="lastfm-square"><i class="fa fa-lastfm-square"></i> fa-lastfm-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="linkedin"><i class="fa fa-linkedin"></i> fa-linkedin</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="linkedin-square"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="linux"><i class="fa fa-linux"></i> fa-linux</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="maxcdn"><i class="fa fa-maxcdn"></i> fa-maxcdn</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="meanpath"><i class="fa fa-meanpath"></i> fa-meanpath</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="openid"><i class="fa fa-openid"></i> fa-openid</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pagelines"><i class="fa fa-pagelines"></i> fa-pagelines</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="paypal"><i class="fa fa-paypal"></i> fa-paypal</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pied-piper"><i class="fa fa-pied-piper"></i> fa-pied-piper</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pied-piper-alt"><i class="fa fa-pied-piper-alt"></i> fa-pied-piper-alt</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pinterest"><i class="fa fa-pinterest"></i> fa-pinterest</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="pinterest-square"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="qq"><i class="fa fa-qq"></i> fa-qq</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="rebel"><i class="fa fa-ra"></i> fa-ra <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="rebel"><i class="fa fa-rebel"></i> fa-rebel</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="reddit"><i class="fa fa-reddit"></i> fa-reddit</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="reddit-square"><i class="fa fa-reddit-square"></i> fa-reddit-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="renren"><i class="fa fa-renren"></i> fa-renren</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="share-alt"><i class="fa fa-share-alt"></i> fa-share-alt</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="share-alt-square"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="skype"><i class="fa fa-skype"></i> fa-skype</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="slack"><i class="fa fa-slack"></i> fa-slack</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="slideshare"><i class="fa fa-slideshare"></i> fa-slideshare</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="soundcloud"><i class="fa fa-soundcloud"></i> fa-soundcloud</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="spotify"><i class="fa fa-spotify"></i> fa-spotify</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="stack-exchange"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="stack-overflow"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="steam"><i class="fa fa-steam"></i> fa-steam</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="steam-square"><i class="fa fa-steam-square"></i> fa-steam-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="stumbleupon"><i class="fa fa-stumbleupon"></i> fa-stumbleupon</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="stumbleupon-circle"><i class="fa fa-stumbleupon-circle"></i> fa-stumbleupon-circle</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tencent-weibo"><i class="fa fa-tencent-weibo"></i> fa-tencent-weibo</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="trello"><i class="fa fa-trello"></i> fa-trello</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tumblr"><i class="fa fa-tumblr"></i> fa-tumblr</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="tumblr-square"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="twitch"><i class="fa fa-twitch"></i> fa-twitch</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="twitter"><i class="fa fa-twitter"></i> fa-twitter</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="twitter-square"><i class="fa fa-twitter-square"></i> fa-twitter-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="vimeo-square"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="vine"><i class="fa fa-vine"></i> fa-vine</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="vk"><i class="fa fa-vk"></i> fa-vk</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="weixin"><i class="fa fa-wechat"></i> fa-wechat <span class="text-muted">(alias)</span></a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="weibo"><i class="fa fa-weibo"></i> fa-weibo</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="weixin"><i class="fa fa-weixin"></i> fa-weixin</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="windows"><i class="fa fa-windows"></i> fa-windows</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="wordpress"><i class="fa fa-wordpress"></i> fa-wordpress</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="xing"><i class="fa fa-xing"></i> fa-xing</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="xing-square"><i class="fa fa-xing-square"></i> fa-xing-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="yahoo"><i class="fa fa-yahoo"></i> fa-yahoo</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="yelp"><i class="fa fa-yelp"></i> fa-yelp</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="youtube"><i class="fa fa-youtube"></i> fa-youtube</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="youtube-play"><i class="fa fa-youtube-play"></i> fa-youtube-play</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="youtube-square"><i class="fa fa-youtube-square"></i> fa-youtube-square</a>
    </div>

</div>
</section>

<section id="medical">
  <h2 class="page-header">Medical Icons</h2>

  <div class="row fontawesome-icon-list">



    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="ambulance"><i class="fa fa-ambulance"></i> fa-ambulance</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="h-square"><i class="fa fa-h-square"></i> fa-h-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="hospital-o"><i class="fa fa-hospital-o"></i> fa-hospital-o</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="medkit"><i class="fa fa-medkit"></i> fa-medkit</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="stethoscope"><i class="fa fa-stethoscope"></i> fa-stethoscope</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="user-md"><i class="fa fa-user-md"></i> fa-user-md</a>
    </div>

    <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a id="selected" data="wheelchair"><i class="fa fa-wheelchair"></i> fa-wheelchair</a>
    </div>
</div>
</section>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
    <button id="save-service" type="button" class="btn btn-primary">Save</button>
</div>
</div>
</div>
</div>
<div class="x_content">
    <div class="row">
        <?php foreach($banner_home->result() as $row){ ?>
      <?php echo form_open_multipart('admin/banner/update');?>
      <div class="col-md-12">
        <div class="form-group">
            <input type="text" name="id_update" value="<?php echo $row->id_static_pages; ?>">
          <input type="hidden" name="id" value="123">
      </div>
      <div class="form-group">
          <label for="">Judul</label>
          <input type="text" name="judul" class="form-control" value="<?php echo $row->title_pages; ?>">
      </div>
      <div class="form-group">
          <label for="">Icon</label>
          <input type="text" name="icon" class="form-control" value="<?php echo $row->icon; ?>">
          <button type="button" class="btn btn-link btn-xs" id="icon-select">Pilih icon</button>
      </div>
      <div class="form-group">
        <label for="">Gambar</label>
        <input type="file" name="gambar" id="" class="form-control">
    </div>
    <div class="form-group">
        <?php $this->load->view('admin/editor'); ?>
        <textarea name="isi" cols="20" rows="20" class="form-control"><?php echo $row->content; ?></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan</button>
    </div>
</div>
<?php echo form_close(); ?>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>


