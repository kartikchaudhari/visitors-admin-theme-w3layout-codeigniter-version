<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		   <!-- page start-->

        <div class="row">
            <div class="col-sm-12 vec-wthree">
                <section class="panel">
                    <header class="panel-heading">
                        WORLD MAP
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div id="world-vmap" style="width:100%; height: 400px;"></div>

                    </div>
                </section>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-12 vec-wthree">
                    <section class="panel">
                        <header class="panel-heading">
                           EUROPE
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">

                            <div id="europe-vmap" style="width: 100%; height: 520px;"></div>


                        </div>
                    </section>
                </div>
            </div>
        <div class="row">
                <div class="col-sm-6 vec-wthree">
                    <section class="panel">
                        <header class="panel-heading">
                            ASIA
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


                            <div id="asia-vmap" style="width: 100%; height: 520px;"></div>


                        </div>
                    </section>
                </div>
                <div class="col-sm-6 vec-wthree">
                    <section class="panel">
                        <header class="panel-heading">
                            Australia
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


                            <div id="australia-vmap" style="width: 100%; height: 520px;"></div>

                        </div>
                    </section>
                </div>

            </div>
        <!-- page end-->

</section>
 <!-- footer -->
<?php 
$data=array('hasVmap'=>TRUE);
$this->load->view('common/footer',['data'=>$data]); ?>
  <!-- / footer -->
</section>
<!--main content end-->
<script>
    jQuery('#world-vmap').vectorMap({
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#666666',
        enableZoom: true,
        borderWidth:1,
        showTooltip: true,
        values: sample_data,
        scaleColors: ['#C8EEFF', '#006491'],
        normalizeFunction: 'polynomial'
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#europe-vmap').vectorMap({
            map: 'europe_en',
            backgroundColor: null,
            color: '#ffffff',
            borderWidth:1,
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: false,
            showTooltip: false,
            values: sample_data,
            scaleColors: ['#C8EEFF', '#006491'],
            normalizeFunction: 'polynomial'
        });
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#asia-vmap').vectorMap({
            map: 'asia_en',
            backgroundColor: null,
            color: '#ffffff',
            borderWidth:1,
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: false,
            showTooltip: false,
            values: sample_data,
            scaleColors: ['#C8EEFF', '#006491'],
            normalizeFunction: 'polynomial'
        });
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#australia-vmap').vectorMap({
            map: 'australia_en',
            backgroundColor: null,
            color: '#ffffff',
            borderWidth:1,
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: false,
            showTooltip: false,
            values: sample_data,
            scaleColors: ['#C8EEFF', '#006491'],
            normalizeFunction: 'polynomial'
        });
    });
</script>

</body>
</html>
