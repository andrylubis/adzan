<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Today's Stats</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats" style="margin-left:30px;">A fully responsive premium quality admin template built on Twitter Bootstrap by <a href="http://www.egrappler.com" target="_blank">EGrappler.com</a>.  These are some dummy lines to fill the area.</h6>
                  <div id="big_stats" class="cf">
                    <?php
                      foreach ($stats as $st) {
                    ?>                  
                    <div class="stat"> <i class="icon-thumbs-up-alt"></i> <span class="value"><?php echo $st['socmed'];?></span> </div>
                    <!-- .stat -->
                    <?php } ?>
                
                  </div>
                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>
         
        </div>
        <!-- /span6 -->
       
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
