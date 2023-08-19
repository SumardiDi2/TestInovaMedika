<h4>Chart Pembayaran</h4>
<?php 
    $year = array();
    $total = array();
    foreach($ts as $transaksi){
        array_push($year, $transaksi["tahun"]);
        array_push($total, $transaksi["total"]);
    }
    $this->widget(
        'chartjs.widgets.ChBars', 
        array(
            'width' => 600,
            'height' => 300,
            'htmlOptions' => array(),
            'labels' => $year,
            'datasets' => array(
                array(
                    "fillColor" => "#ff00ff",
                    "strokeColor" => "rgba(220,220,220,1)",
                    "data" => $total
                )       
            ),
            'options' => array()
        )
    ); 
?>