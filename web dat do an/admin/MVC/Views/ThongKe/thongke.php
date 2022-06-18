

<div class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Báo cáo doanh thu</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row_pr">
        <div class="col-md-12">
            <div class="row pl">
                <canvas id="myfirstchart" ></canvas>
            </div>
            <script>
                let myChart = document.getElementById('myfirstchart').getContext('2d')
                let massPopChart = new Chart(myChart, {
                    type: 'line',
                    data: {
                        labels: [<?php foreach($lines as $line) { echo $line['year'].',';} ?>],
                        datasets: [
                            {
                                data: [<?php foreach($lines as $line) { echo $line['money_earned'].',';} ?>],
                            },
                        ],
                    },

                })
            </script>

            <div class="row pn">
                <div class="col-md-6 col-lg-6">
                    <div class="widget-small primary coloured-icon"><i class='icon  bx bxs-user fa-3x'></i>
                        <div class="info">
                            <h4>Tổng Khách Hàng</h4>
                            <p><b><?=count( $countnv) ;?> Khách Hàng</b></p>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-6 col-lg-6">
                    <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x' ></i>
                        <div class="info">
                            <h4>Tổng sản phẩm</h4>
                            <p><b><?=count($data);?> Sản Phẩm</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                        <div class="info">
                            <h4>Tổng đơn hàng</h4>
                            <p><b><?=count($countorder);?> đơn hàng</b></p>
                        </div>
                    </div>
                </div>
                <?php foreach($doanhthu as $cus) {?>
                <div class="col-md-6 col-lg-6">
                    <div class="widget-small danger coloured-icon"><i class='icon fa-3x bx bxs-info-circle' ></i>
                    <div class="info">
                            <h4>Tổng thu nhập</h4>
                            <p><b><?=number_format(array_sum($cus));?>  đ</b></p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
