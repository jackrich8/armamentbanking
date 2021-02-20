<div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title"><?php echo PAGE_TITLE . " " . PAGE_LINK;?></h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#"><?php echo PAGE_TITLE;?></a>
                  </li>
                  <li class="breadcrumb-item active"><?php echo PAGE_TITLE . " " . PAGE_LINK;?>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="media width-250 float-right">
              <media-left class="media-middle">
                <div id="sp-bar-total-sales"></div>
              </media-left>
              <div class="media-body media-right text-right">
                <h3 class="m-0">$<?php echo number_format($name['amount']);?></h3>
              </div>
            </div>
          </div>
        </div>